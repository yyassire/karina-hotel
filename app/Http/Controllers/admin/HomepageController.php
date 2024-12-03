<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Homepage;
use Illuminate\Http\Request;
use App\Helper\imageUpload;



class HomepageController extends Controller
{
    public function index()
    {
        $data = Homepage::first();
        return view('admin.homepage.index',compact('data'));
    }


    public function update(Request $request,$id)
    {
        $all = $request->except('_token');
        $update = Homepage::find($id)->update($all);
        if($update){
            return redirect()->route('admin.homepage.index')->with('status','Başarıyla Güncellendi')->send();
        }else{
            return redirect()->route('admin.homepage.index')->with('status','Beklenmedik Bir Hata Oluştu!');
        }
    }

}
