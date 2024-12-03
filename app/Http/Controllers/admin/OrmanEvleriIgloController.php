<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helper\imageUpload;
use App\Models\Ormanevleri_iglo;

class OrmanEvleriIgloController extends Controller
{
    public function index()
    {
        $data = Ormanevleri_iglo::first();
        return view('admin.ormanevleri-iglo.index',compact('data'));
    }


    public function update(Request $request,$id)
    {
        $all = $request->except('_token');
        $update = Ormanevleri_iglo::find($id)->update($all);
        if($update){
            return redirect()->route('admin.ormanevleri-iglo.index')->with('status','Başarıyla Güncellendi')->send();
        }else{
            return redirect()->route('admin.ormanevleri-iglo.index')->with('status','Beklenmedik Bir Hata Oluştu!');
        }
    }

}
