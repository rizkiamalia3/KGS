<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Slider;

class PageController extends Controller
{

    public function index()
    {
        $sliders = Slider::all();
        return view('index',compact('sliders'));
    }

    public function doctors()
    {
        $doctor = Doctor::all();
        return view('doctor',compact('doctor'));
    }

    public function about()
    {
        return view('about');
    }


}
