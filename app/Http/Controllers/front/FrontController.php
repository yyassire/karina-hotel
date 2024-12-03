<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\About_gallery;
use App\Models\Blog;
use App\Models\Blog_gallery;
use App\Models\Contact;
use App\Models\Facility;
use App\Models\Facility_detail;
use App\Models\Facility_gallery;
use App\Models\Gallery;
use App\Models\Gallery_category;
use App\Models\Homepage;
use App\Models\Ormanevleri_homepage;
use App\Models\Hotel_rule;
use App\Models\Language;
use App\Models\Pdf;
use App\Models\Room;
use App\Models\Room_gallery;
use App\Models\Footer;
use App\Models\Room_property;
use App\Models\Slider;
use App\Models\Opportunity;
use App\Models\Opportunity_gallery;
use App\Models\Hotel;
use App\Models\Settings;
use App\Models\Tkd;
use App\Models\Activity;
use App\Models\Activity_gallery;
use App\Models\Ormanevleri_contact;
use App\Models\Ormanevleri_iglo;
use App\Models\Ormanevleri_room;
use App\Models\Ormanevleri_room_gallery;
use App\Models\Page;
use App\Models\Page_detail;
use App\Models\Page_detail_gallery;
use App\Models\Page_gallery;

class FrontController extends Controller
{

    public function changeLanguage($lang)
    {
        session()->put('lang', $lang);
        app()->setLocale($lang);

        $thisUrl = request()->headers->get('referer');

        if ($lang == 'tr') {
            $newUrl  = str_replace('/en', '/tr', $thisUrl);
        } else {
            $newUrl  = str_replace('/tr', '/en', $thisUrl);
        }

        return redirect($newUrl);

        //return redirect()->to('/'.$lang);
        //echo app()->getLocale();
    }

    public function index()
    {
        $session = app()->getLocale();
        $homepage = Homepage::first();
        $sliders = Slider::where('slider_id', 1)->first();
        $mobile_sliders = Slider::where('slider_id', 8)->first();
        $activity = Page::where('category', 'aktivite')->first();
        $activity_details = Page_detail::where('page_id', $activity->id)->get();
        $pages = Page::where('is_active', 1)->get();
        $rooms = Room::orderBy('desk', 'asc')->get();
        return view('front.index', compact('session', 'pages', 'homepage', 'activity_details', 'rooms', 'sliders', 'mobile_sliders'));
    }

    public function page($locale, $selflink, $id)
    {
        $session = app()->getLocale();
        $page = Page::where("selflink_$session", $selflink)->first();

        switch ($page['category']) {

            case $page['category'] == 'firsatlar':
                $session = app()->getLocale();

                $details = Page_detail::where('page_id', $page->id)->get();
                return view('front.opportunities', compact('session', 'details', 'page'));
                break;
            case $page['category'] == 'restoran':
                $session = app()->getLocale();
                $details = Page_detail::where('page_id', $page->id)->get();
                return view('front.restaurant', compact('session', 'details', 'page'));
                break;
            case $page['category'] == 'havuz':
                $session = app()->getLocale();
                $details = Page_detail::where('page_id', $page->id)->get();
                return view('front.pool', compact('session', 'details', 'page'));
                break;
            case $page['category'] == 'aktivite':
                $session = app()->getLocale();
                $details = Page_detail::where('page_id', $page->id)->get();
                return view('front.activity', compact('session', 'details', 'page'));
                break;
            case $page['category'] == 'spa':
                $session = app()->getLocale();
                $details = Page_detail::where('page_id', $page->id)->get();
                return view('front.spa', compact('session', 'details', 'page'));
                break;
            case $page['category'] == 'toplanti':
                $session = app()->getLocale();
                $details = Page_detail::where('page_id', $page->id)->get();
                return view('front.meeting', compact('session', 'details', 'page'));
                break;
        }
    }

    public function about()
    {
        $session = app()->getLocale();
        $sliders = Slider::where('slider_id', 2)->get();
        $about = About::first();
        return view('front.about', compact('sliders', 'session', 'about'));
    }

    public function rooms()
    {
        $session = app()->getLocale();
        $sliders = Slider::where('slider_id', 3)->get();
        $tkd = Tkd::where('id', 1)->first();
        $rooms = Room::all();
        return view('front.rooms', compact('session', 'tkd', 'sliders', 'rooms'));
    }

    public function gallery()
    {
        $session = app()->getLocale();
        $sliders = Slider::where('slider_id', 4)->orderBy('desk', 'asc')->get();
        $tkd = Tkd::where('id', 2)->first();
        return view('front.gallery', compact('session', 'tkd', 'sliders'));
    }

    public function contact()
    {
        $session = app()->getLocale();
        $contact = Contact::first();
        return view('front.contact', compact('session', 'contact'));
    }

    public function pdf($locale, $id)
    {
        $pdf = Pdf::find($id);
        return view('front.viewpdf', compact('pdf'));
    }

    public function footer($locale, $selflink, $id)
    {
        $session = app()->getLocale();
        $footer = Footer::where('id', $id)->first();
        return view('front.footer', compact('footer', 'session'));
    }

    public function ajax($id)
    {

        $data = Page_detail::where('id', $id)->first();
        if (!$data) {
            return 'Data Yok ';
        }
        $image = Page_detail_gallery::where('page_detail_id', $data->id)->get();
        return $image;
    }

    public function room_ajax($id)
    {

        $image = Room_gallery::where('room_id', $id)->orderBy('desk', 'asc')->get();

        if (!$image) {
            return 'Data Yok ';
        }

        return $image;
    }

    public function ormanevleri()
    {
        $session = app()->getLocale();
        $homepage = Ormanevleri_homepage::first();
        $sliders = Slider::where('slider_id', 10)->first();
        $mobile_sliders = Slider::where('slider_id', 11)->first();
        $rooms = Ormanevleri_room::orderBy('desk', 'asc')->get();
        $iglo_slider = Slider::where('slider_id', 15)->get();
        return view('front.ormanevleri', compact('session', 'homepage', 'rooms', 'sliders', 'mobile_sliders', 'iglo_slider'));
    }

    public function ormanevlerirooms()
    {
        $session = app()->getLocale();
        $sliders = Slider::where('slider_id', 3)->get();
        $tkd = Tkd::where('id', 3)->first();
        $rooms = Ormanevleri_room::all();
        return view('front.ormanevleri-rooms', compact('session', 'tkd', 'sliders', 'rooms'));
    }

    public function ormanevleri_room_ajax($id)
    {

        $image = Ormanevleri_room_gallery::where('room_id', $id)->orderBy('desk', 'asc')->get();

        if (!$image) {
            return 'Data Yok ';
        }

        return $image;
    }

    public function ormanevleriiglo()
    {
        $session = app()->getLocale();
        $sliders = Slider::where('slider_id', 15)->get();
        $tkd = Tkd::where('id', 1)->first();
        $iglo = Ormanevleri_iglo::first();
        return view('front.ormanevleri-iglo', compact('session', 'tkd', 'sliders', 'iglo'));
    }

    public function ormanevlerigallery()
    {
        $session = app()->getLocale();
        $sliders = Slider::where('slider_id', 12)->orderBy('desk', 'asc')->get();
        $tkd = Tkd::where('id', 4)->first();
        return view('front.ormanevleri-gallery', compact('session', 'tkd', 'sliders'));
    }

    public function ormanevlericontact()
    {
        $session = app()->getLocale();
        $contact = Ormanevleri_contact::first();
        return view('front.ormanevleri-contact', compact('session', 'contact'));
    }
}
