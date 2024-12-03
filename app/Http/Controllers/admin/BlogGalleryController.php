<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog_gallery;
use App\Http\Requests\StoreSliderRequest;
use File;

class BlogGalleryController extends Controller
{
    public function index($id)
    {
        $data = blog_gallery::where('blog_id', $id)->orderBy('desk', 'asc')->get();
        return view('admin.blog_gallery.index', ['data' => $data, 'id' => $id]);
    }

    public function ajaxdesk(Request $request)
    {
        $all = $request->except('_token');
        $update = blog_gallery::where('id', '=', $all['id'])->update($all);
    }


    public function store(StoreSliderRequest $request)
    {
        $all = $request->except('_token');
        if ($request->has('image')) {
            foreach ($request->file('image') as $image) {
                $imageName = "images/blog_gallery/" . rand(1, 999) . '-' . $image->getClientOriginalName();
                if (File::exists($imageName)) {
                    return redirect()->to('/admin/blog_gallery/' . $all['blog_id'])->with('status', 'Aynı isimde daha önce yükleme işlemi yapılmış. Lütfen resim adını değiştirin veya farklı bir fotoğraf yükleyin !')->send();
                }
                $image->move(public_path('images/blog_gallery'), $imageName);
                blog_gallery::create([
                    'blog_id' => $all['blog_id'],
                    'image' => $imageName
                ]);
            }
        } else {
            dd('Lütfen Resim Seçiniz ! ');
        }
        return redirect()->to('/admin/blog_gallery/' . $all['blog_id'])->send();
    }

    public function delete($id, $blog_id)
    {
        $image = blog_gallery::find($id);
        $old_image = $image->image;
        unlink($old_image);
        $delete = blog_gallery::find($id)->delete();
        if ($delete) {
            return redirect()->to('/admin/blog_gallery/' . $blog_id)->send();
        } else {
            return redirect()->back()->with('status', 'Beklenmedik Bir Hata Oluştu!');
        }
    }

    public function destroy($blog_id)
    {
        $images = blog_gallery::where('blog_id', $blog_id)->get();
        foreach ($images as $image) {
            $oldImage = $image->image;
            unlink($oldImage);
        }
        $destroy = blog_gallery::where('blog_id', $blog_id)->delete();
        if ($destroy) {
            return redirect()->to('/admin/blog_gallery/' . $blog_id)->with('status', 'Başarıyla Silindi')->send();
        } else {
            return redirect()->back()->with('status', 'Beklenmedik Bir Hata Oluştu!');
        }
    }
}
