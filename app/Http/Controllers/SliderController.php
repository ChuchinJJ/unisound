<?php

namespace App\Http\Controllers;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('status', "1")->get();
        return view('home')->with('sliders', $sliders);
    }

    public function indexAdmin()
    {
        $sliders = Slider::get();
        return view('admin.slider')->with('sliders', $sliders);
    }

    public function update($id, $value)
    {   
        $slider = Slider::find($id);
        $status = 0;
        if($value == "true"){ $status = 1; }
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

        /*$file = $request->file('file');
        $path = public_path() . '/img/sliders';
        $fileName = uniqid() . $file->getClientOriginalName();
        $file->move($path, $fileName);

        return $fileName;*/
    }

    public function add($horizontal, $vertical)
    {
        $slider = new Slider;
        $slider->imagen = $horizontal;
        $slider->movil = $vertical;
        $slider->save();
        return redirect('/admin/sliders')->with('success', 'El Slider ha sido agregado con exito');
    }

    public function destroy($id)
    {
        $slider = Slider::find($id);
        if( $slider->imagen != 'noimage.jpg' ) {
            Storage::delete('public/img/sliders/'.$slider->imagen);
        }
        if( $slider->movil != 'noimage.jpg' ) {
            Storage::delete('public/img/sliders/'.$slider->movil);
        }
        $slider->delete();
        return redirect('/admin/sliders')->with('success', 'El Slider ha sido eliminado con exito');
    }
}
