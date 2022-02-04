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
}
