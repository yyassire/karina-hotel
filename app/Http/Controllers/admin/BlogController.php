<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Helper\imageUpload;
use Illuminate\Http\Request;
use App\Models\Blog_gallery;



class BlogController extends Controller
{
    public function index()
    {
        $data = blog::orderBy('desk', 'asc')->get();
        return view('admin.blog.index', compact('data'));
    }

    public function ajaxdesk(Request $request)
    {
        $all = $request->except('_token');
        $update = blog::where('id', '=', $all['id'])->update($all);
    }


    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => 'required|max:1024'
        ]);
        $all = $request->except('_token');
        $all['image'] = imageUpload::singleUpload(rand(1, 9000), "blog", $request->file('image'));
        $create = blog::create($all);
        if ($create) {
            return redirect()->route('admin.blog.index')->with('status', 'Başarıyla Eklendi');
        } else {
            return redirect()->route('admin.blog.index')->with('status', 'Beklenmedik Bir Hata Oluştu!');
        }
    }

    public function edit($id)
    {
        $data = blog::find($id);
        return view('admin.blog.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'image' => 'max:1024',
        ]);
        $all = $request->except('_token');
        $image = blog::find($id);
        if ($request->hasFile('image')) {
            $old_image = $image->image;
            $old_big_image = \App\Helper\mHelper::largeImage($image['image']);
            if (file_exists($old_image)) {
                unlink($old_image);
                unlink($old_big_image);
            }
        $all['image'] = imageUpload::singleUpload(rand(1, 9000), 'blog', $request->file('image'));
        } else {
            unset($all['image']);
        }
        $update = blog::find($id)->update($all);
        if ($update) {
            return redirect()->route('admin.blog.index')->with('status', 'Başarıyla Güncellendi');
        } else {
            return redirect()->route('admin.blog.index')->with('status', 'Beklenmedik Bir Hata Oluştu!');
        }
    }

    public function delete($id)
    {
        $image = blog::find($id);
        $blog_gallery = Blog_gallery::where('blog_id', $id)->get();


        if (isset($image)) {

            $old_image_one = $image->image;
            $old_big_image_one = \App\Helper\mHelper::largeImage($image['image']);
            if(file_exists($old_image_one) && file_exists($old_big_image_one)){
                unlink($old_image_one);
                unlink($old_big_image_one);
            }
        }

        if (isset($blog_gallery)) {

            foreach ($blog_gallery as $gallery) {
                $old_gallery = $gallery->image;
                unlink($old_gallery);
            }
        }

        $delete = Blog::find($id)->delete();
        if ($delete) {
            return redirect()->route('admin.blog.index')->with('status', 'Başarıyla Silindi');
        } else {
            return redirect()->route('admin.blog.index')->with('status', 'Beklenmedik Bir Hata Oluştu!');
        }
    }
}
