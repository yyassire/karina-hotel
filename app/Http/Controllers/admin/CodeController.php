<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Code;

class CodeController extends Controller
{
    public function index(){
        $data = Code::first();
        return view('admin.code.index',['data'=>$data]);
    }

    public function update(Request $request,$id){
        $all = $request->except('_token');
        $update = Code::find($id)->update($all);
        if($update){
            return redirect()->to('/admin/code')->with('status','Başarıyla Güncellendi');
        }else{
            return redirect()->back()->with('status','Beklenmedik Bir Hata Oluştu!');
        }
    }

}
