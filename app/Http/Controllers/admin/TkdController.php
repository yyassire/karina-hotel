<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tkd;

class TkdController extends Controller
{
    public function index()
    {
        $data = Tkd::all();
        return view('admin.tkd.index',compact('data'));
    }

    public function create()
    {
        return view('admin.tkd.create');
    }

    public function store(Request $request)
    {
        $all = $request->except('_token');
        $create = Tkd::create($all);
        if($create){
            return redirect()->route('admin.tkd.index')->with('status','Başarıyla Eklendi');
        }else{
            return redirect()->back()->with('status','Beklenmedik Bir Hata Oluştu!');
        }
    }

    public function edit($id)
    {
        $data = Tkd::find($id);
        return view('admin.tkd.edit',compact('data'));
    }

    public function update(Request $request,$id)
    {
        $all = $request->except('_token');
        $update = Tkd::find($id)->update($all);
        if($update){
            return redirect()->back()->with('status','Başarıyla Güncellendi');
        }else{
            return redirect()->route('admin.tkd.index')->with('status','Beklenmedik Bir Hata Oluştu!');
        }
    }

    public function delete($id)
    {
        $delete = Tkd::find($id)->delete();
        if($delete)
        {
            return redirect()->route('admin.tkd.index')->with('status','Başarıyla Silindi');
        }else{
            return redirect()->route('admin.tkd.index')->with('status','İşlem Başarısız');
        }
    }
}
