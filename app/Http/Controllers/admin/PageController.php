<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helper\imageUpload;
use App\Models\Page;
use App\Models\Page_gallery;
use App\Models\Page_detail;
use App\Models\Page_detail_gallery;



class PageController extends Controller
{
    public function index()
    {
        $data = Page::orderBy('desk','asc')->get();
        return view('admin.page.index',compact('data'));
    }

    public function ajaxdesk(Request $request){
        $all = $request->except('_token');
        $update = Page::where('id','=',$all['id'])->update($all);
    }


    public function create()
    {
        return view('admin.page.create');
    }

    public function store(Request $request)
    {
        $all = $request->except('_token');
        $all['image'] = imageUpload::singleUpload(rand(1, 9000), "page", $request->file('image'));
        $create = Page::create($all);
        if($create){
            return redirect()->route('admin.page.index')->with('status','Başarıyla Eklendi');
        }else{
            return redirect()->route('admin.page.index')->with('status','Beklenmedik Bir Hata Oluştu!');
        }
    }

    public function edit($id)
    {
        $data = Page::find($id);
        return view('admin.page.edit',compact('data'));
    }

    public function update(Request $request,$id)
    {
        $all = $request->except('_token');
        $image = Page::find($id);
        if($request->hasFile('image')){
            $old_image = $image->image;
            $old_big_image = \App\Helper\mHelper::largeImage($image['image']);
          	if(file_exists($old_image)){
              unlink($old_image);
            }
          	if(file_exists($old_big_image)){
              unlink($old_big_image);
            }
            $all['image'] = imageUpload::singleUpload(rand(1,9000),'page',$request->file('image'));
        }else{
            unset($all['image']);
        }


        $update = Page::find($id)->update($all);
        if($update){
            return redirect()->route('admin.page.index')->with('status','Başarıyla Güncellendi');
        }else{
            return redirect()->route('admin.page.index')->with('status','Beklenmedik Bir Hata Oluştu!');
        }
    }

    public function delete($id)
    {
         $image = Page::find($id);
        $page_gallery = Page_gallery::where('page_id',$id)->get();
        $page_detail = Page_detail::where('page_id',$id)->first();
        if(isset($page_detail)){
            $page_detail_gallery = Page_detail_gallery::where('page_detail_id',$page_detail->id)->get();
        }



        if(isset($image)){

            $old_image_one = $image->image;
            $old_big_image_one = \App\Helper\mHelper::largeImage($image['image']);
            unlink($old_image_one);
            unlink($old_big_image_one);

        }



        if(isset($page_gallery)){

            foreach($page_gallery as $gallery){
                $old_gallery = $gallery->image;
                unlink($old_gallery);
            }
        }

        if(isset($page_detail_gallery)){

            foreach($page_detail_gallery as $gallery){
                $old_gallery_two= $gallery->image;
                unlink($old_gallery_two);
            }
        }

        $delete = Page::find($id)->delete();
        if($delete){
            return redirect()->route('admin.page.index')->with('status','Başarıyla Silindi');
        }else{
            return redirect()->route('admin.page.index')->with('status','Beklenmedik Bir Hata Oluştu!');
        }
    }
}
