<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MainPageTitleSubtitle;
use Illuminate\Http\Request;

class MainPageTitleSubtitleController extends Controller
{
    // Verileri listelemek için
    public function index()
    {
        $titles = MainPageTitleSubtitle::all(); // Verileri alıyoruz
        return view('admin.homepage.index', compact('titles')); // Listeyi view'e gönderiyoruz
    }

    // Düzenleme sayfası için
    public function edit($id)
    {
        $data = MainPageTitleSubtitle::findOrFail($id); // Belirli veriyi buluyoruz
        return view('admin.homepage.index', compact('data')); // Düzenleme formunu gönderiyoruz
    }

    // Güncelleme işlemi için
    public function update(Request $request, $id)
    {
        $data = MainPageTitleSubtitle::findOrFail($id); // Veriyi buluyoruz

        // Veriyi güncelliyoruz
        $data->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'title_en' => $request->title_en,
            'subtitle_en' => $request->subtitle_en,
            'video_url' => $request->video_url,
        ]);

        // Güncellenen verilerle admin paneline yönlendiriyoruz
        return redirect()->route('admin.homepage.index')->with('success', 'Veriler başarıyla güncellendi');
    }
}
