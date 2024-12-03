<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helper\imageUpload;
use App\Models\About;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    public function index()
    {
        $data = About::first();
        return view('admin.about.index',compact('data'));
    }


    public function update(Request $request,$id)
    {
        $all = $request->except('_token');
        if(@$all['image'] != ""){
            File::deleteDirectory('images/about');
            $all['image'] = imageUpload::singleUpload(rand(1,9000),'about',$request->file('image'));
        }else{
            unset($all['image']);
        }
        $update = About::find($id)->update($all);
        if($update){
            return redirect()->route('admin.about.index')->with('status','Başarıyla Güncellendi');
        }else{
            return redirect()->route('admin.about.index')->with('status','Beklenmedik Bir Hata Oluştu!');
        }
    }

}
