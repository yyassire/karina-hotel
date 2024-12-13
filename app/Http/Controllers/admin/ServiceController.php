<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSliderRequest;
use App\Models\Service;
use App\Models\ServiceCategory;
use File;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function index()
    {
        $data = Service::all();
        $category_data = ServiceCategory::all();


        // $slug_category = 
        return view('admin.services.index', ['data' => $data, 'category_data' => $category_data]);
    }

    public function store(StoreSliderRequest $request)
    {
        // ===================================
        $all = $request->except('_token');

        if ($request->has('image')) {
            foreach ($request->file('image') as $image) {
                $imageName = "images/slider/" . rand(1, 999) . '-' . $image->getClientOriginalName();
                if (File::exists($imageName)) {
                    return redirect()->to('/admin/service/')->with('status', 'Aynı isimde daha önce yükleme işlemi yapılmış. Lütfen resim adını değiştirin veya farklı bir fotoğraf yükleyin !')->send();
                }
                $image->move(public_path('images/slider'), $imageName);

                Service::create([
                    'category_id' => $all['category_id'],
                    'image' => $imageName,
                ]);
            }
        } else {
            dd('Lütfen Resim Seçiniz ! ');
        }

        return redirect()->to('/admin/service/')->with('status', 'Başarıyla Eklendi')->send();
    }

    public function delete($id)
    {
        $image = Service::find($id);
        $old_image = $image->image;
        unlink($old_image);

        $delete = Service::where('id', $id)->delete();
        if ($delete) {
            return redirect()->to('/admin/service/')->with('status', 'Başarıyla Silindi')->send();
        } else {
            return redirect()->back()->with('status', 'Beklenmedik Bir Hata Oluştu!');
        }
    }
}
