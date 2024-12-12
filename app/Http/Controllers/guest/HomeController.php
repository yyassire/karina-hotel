<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use App\Models\ActuRoom;
use App\Models\Service;
use App\Models\Slider;
use App\Models\SliderFilter;
use App\Models\MainPageTitleSubtitle;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $rooms = ActuRoom::where('preferred_room', 1)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();
        $titles = MainPageTitleSubtitle::all();
        return view('guest.index', compact('rooms', 'titles'));
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
        return view('guest.gallery.index', compact('sliders', 'SliderFilters'));
    }

    public function reservation()
    {
        $rooms = ActuRoom::paginate(6);
        return view('guest.reservation.index', compact('rooms'));
    }

    public function standart_deluxe_oda($id)
    {
        $room = ActuRoom::findOrFail($id);
        $rooms = ActuRoom::where('preferred_room', 1)
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();
        return view('guest.standart-deluxe-oda.index', compact('room', 'rooms'));
    }
}