<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Ormanevleri_homepage;
use Illuminate\Http\Request;
use App\Helper\imageUpload;



class OrmanEvleriHomepageController extends Controller
{
    public function index()
    {
        $data = Ormanevleri_homepage::first();
        return view('admin.ormanevleri-homepage.index',compact('data'));
    }


    public function update(Request $request,$id)
    {
        $all = $request->except('_token');
        $update = Ormanevleri_homepage::find($id)->update($all);
        if($update){
            return redirect()->route('admin.ormanevleri-homepage.index')->with('status','Başarıyla Güncellendi')->send();
        }else{
            return redirect()->route('admin.ormanevleri-homepage.index')->with('status','Beklenmedik Bir Hata Oluştu!');
        }
    }

}
