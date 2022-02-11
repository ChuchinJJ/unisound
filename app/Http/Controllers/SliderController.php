<?php

namespace App\Http\Controllers;
use App\Models\Slider;
use Illuminate\Http\Request;

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

    public function add()
    {
        return view('admin.addSlider');
    }
}
