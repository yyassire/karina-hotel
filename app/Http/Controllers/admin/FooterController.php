<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helper\imageUpload;
use App\Models\Footer;


class FooterController extends Controller
{
    public function index()
    {
        // if (session()->has('lang')) {
        //     $currentLang = Language::where('code', session()->get('lang'))->first();
        // } else {
        //     $currentLang = Language::where('is_default', 1)->first();
        // }

        $data = Footer::orderBy('desk','asc')->get();
        return view('admin.footer.index',compact('data'));
    }

    public function ajaxdesk(Request $request){
        $all = $request->except('_token');
        $update = Footer::where('id','=',$all['id'])->update($all);
    }

    public function create()
    {
        return view('admin.footer.create');
    }

    public function store(Request $request)
    {
        $all = $request->except('_token');
        $all['image'] = imageUpload::singleUpload(rand(1, 9000), "footer", $request->file('image'));
        $create = Footer::create($all);
        if($create){
            return redirect()->route('admin.footer.index')->with('status','Başarıyla Eklendi');
        }else{
            return redirect()->route('admin.footer.index')->with('status','Beklenmedik Bir Hata Oluştu!');
        }
    }

    public function edit($id)
    {
        $data = Footer::find($id);
        return view('admin.footer.edit',compact('data'));
    }

    public function update(Request $request,$id)
    {
        $id = $request->route('id');
        $all = $request->except('_token');
        $image = Footer::find($id);
        if($request->hasFile('image')){
            $old_image = $image->image;
            $old_big_image = \App\Helper\mHelper::largeImage($image['image']);
          	if(file_exists($old_image)){
              unlink($old_image);
            }
          	if(file_exists($old_big_image)){
              unlink($old_big_image);
            }
            $all['image'] = imageUpload::singleUpload(rand(1,9000),'footer',$request->file('image'));
        }else{
            unset($all['image']);
        }


        $update = Footer::find($id)->update($all);
        if($update){
            return redirect()->route('admin.footer.index')->with('status','Başarıyla Güncellendi');
        }else{
            return redirect()->route('admin.footer.index')->with('status','Beklenmedik Bir Hata Oluştu!');
        }
    }

    public function delete($id)
    {
        $image = Footer::find($id);
        $old_image = $image->image;
        $old_big_image = \App\Helper\mHelper::largeImage($image['image']);
        unlink($old_image);
        unlink($old_big_image);
        $delete = Footer::find($id)->delete();
        if($delete){
            return redirect()->route('admin.footer.index')->with('status','Başarıyla Silindi');
        }else{
            return redirect()->route('admin.footer.index')->with('status','Beklenmedik Bir Hata Oluştu!');
        }
    }
}
