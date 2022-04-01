<?php

namespace App\Http\Controllers;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index'] ]);
    }

    public function index()
    {
        $sliders = Slider::where('status', '1')->where('tipo', 'Imagen')->get();
        $videos = Slider::where('status', '1')->where('tipo', 'Video')->get();
        return view('home')->with(['sliders' => $sliders, 'videos' => $videos]);
    }

    public function indexAdmin()
    {
        $sliders = Slider::where('tipo', 'Imagen')->get();
        $videos = Slider::where('tipo', 'Video')->get();
        return view('admin.slider')->with(['sliders' => $sliders, 'videos' => $videos]);
    }

    public function update($id, $value)
    {   
        $slider = Slider::find($id);
        $count = Slider::where('status', 1)->where('tipo', $slider->tipo)->count();
        $status = 0;
        if($value == "true"){ $status = 1; }
        if($count < 2 && $value == "false"){
            return redirect('/admin/sliders')->with('success', 'Tiene que tener al menos un slider activo');    
        }
        
        if($count > 1 && $value == "true" && $slider->tipo == "Video"){
            $sliderRm = Slider::where('status', 1)->where('tipo', $slider->tipo)->first();
            $sliderRm->status = 0;
            $sliderRm->save();
        }
        $slider->status = $status;
        $slider->save();
        return redirect('/admin/sliders')->with('success', 'El estado del slider ha sido cambiado');
    }

    public function addview()
    {
        return view('admin.addSlider');
    }

    public function upload(Request $request)
    {
        if( $request->hasFile('file') ) {
            //Nombre de archivo con extension
            $fileNameWithExt = $request->file('file')->getClientOriginalName();
            //Nombre de archivo sin extension
            $fileName = pathInfo($fileNameWithExt, PATHINFO_FILENAME);
            //Solo extension
            $extension = $request->file('file')->getClientOriginalExtension();
            //Nombre de archivo a guardar
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            //Subir archivo al servidor
            $path = $request->file('file')->storeAs('public/img/sliders/', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        return $fileNameToStore;
    }

    public function add($horizontal, $vertical)
    {
        $slider = new Slider;
        $slider->imagen = $horizontal;
        $slider->movil = $vertical;
        if($horizontal == $vertical){
            $slider->tipo = "Video";
            $count = Slider::where('status', 1)->where('tipo', 'video')->count();
            if($count > 1){
                $sliderRm = Slider::where('status', 1)->where('tipo', $slider->tipo)->first();
                $sliderRm->status = 0;
                $sliderRm->save();
            }
        }
        $slider->save();
        return redirect('/admin/sliders')->with('success', 'El Slider ha sido agregado con exito');
    }

    public function destroy($id)
    {
        $slider = Slider::find($id);
        if( $slider->imagen != 'noimage.jpg' ) {
            Storage::delete('public/img/sliders/'.$slider->imagen);
        }
        if( $slider->movil != 'noimage.jpg' && $slider->imagen != $slider->movil ) {
            Storage::delete('public/img/sliders/'.$slider->movil);
        }
        $slider->delete();
        return redirect('/admin/sliders')->with('success', 'El Slider ha sido eliminado con exito');
    }
}
