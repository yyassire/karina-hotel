<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use App\Models\ActuRoom;
use App\Models\Slider;
use App\Models\SliderFilter;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $rooms = ActuRoom::where('preferred_room', 1)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        return view('guest.index', compact('rooms'));
    }
    public function foresthome()
    {
        $sliders = Slider::where('slider_id', 12)->get();

        return view('guest.foresthome.index', compact('sliders'));
    }

    public function gallery()
    {
        $sliders = Slider::where('slider_id', 4)->get();
        $SliderFilters = SliderFilter::get();
        // print the sliders


        return view('guest.gallery.index', compact('sliders', 'SliderFilters'));
    }
}
