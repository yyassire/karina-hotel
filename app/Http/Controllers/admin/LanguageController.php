<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Language;

class LanguageController extends Controller
{
    public function index(){
        $data = Language::orderBy('desk','desc')->get();
        return view('admin.language.index',compact('data'));
    }

    public function ajaxdesk(Request $request){
        $all = $request->except('_token');
        $update = Language::where('id','=',$all['id'])->update($all);
    }


    public function store(Request $request){
        $all = $request->except('_token');
        $request->validate([
            'name' => 'required|unique:languages',
            'code' => 'required|unique:languages',
            'is_default' => 'required',
        ]);
        $create = Language::create($all);
        if($create){
            return redirect()->route('admin.language.index')->with('status','Başarıyla Eklendi');
        }else{
            return redirect()->back()->with('status','Beklenmedik Bir Hata Oluştu!');
        }
    }

    public function edit($id){
        $data = Language::find($id);
        return view('admin.language.edit',compact('data'));
    }

    public function update(Request $request,$id){
        $all = $request->except('_token');
        $update = Language::find($id)->update($all);
        if($update){
            return redirect()->route('admin.language.index')->with('status','Başarıyla Güncellendi');
        }else{
            return redirect()->back()->with('status','Beklenmedik Bir Hata Oluştu!');
        }
    }

    public function delete($id){
        $delete = Language::if($id)->delete();
        if($delete){
            return redirect()->route('admin.language.index')->with('status','Başarıyla Silindi');
        }else{
            return redirect()->back()->with('status','Beklenmedik Bir Hata Oluştu!');
        }
    }
}
