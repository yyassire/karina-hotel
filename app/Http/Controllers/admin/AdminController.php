<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Room;
use App\Models\Pdf;

class AdminController extends Controller
{
    public function index(){
        $room = Room::all();
        $pdfs = Pdf::all();
        $sliders = Slider::all();

        return view('admin.index',['room'=>$room,'pdfs'=>$pdfs,'sliders'=>$sliders]);
    }
}
