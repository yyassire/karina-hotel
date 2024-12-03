<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\StoreSliderRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use File;


class SliderController extends Controller
{
    public function index($id)
    {
        $data = Slider::where('slider_id', $id)->orderBy('desk', 'asc')->get();
        return view('admin.slider.index', ['data' => $data, 'id' => $id]);
    }

    public function ajaxdesk(Request $request)
    {
        $all = $request->except('_token');
        $update = Slider::where('id', '=', $all['id'])->update($all);
    }


    public function store(StoreSliderRequest $request)
    {
        // ===================================
        $all = $request->except('_token');

        if ($request->has('image')) {
            foreach ($request->file('image') as $image) {
                $imageName = "images/slider/" . rand(1, 999) . '-' . $image->getClientOriginalName();
                if (File::exists($imageName)) {
                    return redirect()->to('/admin/slider/' . $all['slider_id'])->with('status', 'Aynı isimde daha önce yükleme işlemi yapılmış. Lütfen resim adını değiştirin veya farklı bir fotoğraf yükleyin !')->send();
                }
                $image->move(public_path('images/slider'), $imageName);
                Slider::create([
                    'slider_id' => $all['slider_id'],
                    'image' => $imageName
                ]);
            }
        } else {
            dd('Lütfen Resim Seçiniz ! ');
        }

        return redirect()->to('/admin/slider/' . $all['slider_id'])->with('status', 'Başarıyla Eklendi')->send();
    }

    public function delete($id, $slider_id)
    {
        $image = Slider::find($id);
        $old_image = $image->image;
        unlink($old_image);

        $delete = Slider::where('id', $id)->delete();
        if ($delete) {
            return redirect()->to('/admin/slider/' . $slider_id)->with('status', 'Başarıyla Silindi')->send();
        } else {
            return redirect()->back()->with('status', 'Beklenmedik Bir Hata Oluştu!');
        }
    }

    public function destroy($slider_id)
    {

        $images = Slider::where('slider_id', $slider_id)->get();

        foreach ($images as $image) {
            $oldImage = $image->image;
            unlink($oldImage);
        }

        $destroy = Slider::where('slider_id', $slider_id)->delete();

        if ($destroy) {
            return redirect()->to('/admin/slider/' . $slider_id)->with('status', 'Başarıyla Silindi')->send();
        } else {
            return redirect()->back()->with('status', 'Beklenmedik Bir Hata Oluştu!');
        }
    }
}
