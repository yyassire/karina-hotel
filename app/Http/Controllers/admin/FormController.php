<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    public function index()
    {
        $data = Form::all();

        return view('admin.form.index',compact('data'));
    }

    public function store(Request $request)
    {
        $all = $request->except('_token');
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'subject' => 'required',

        ]);

        $data = [
            'name'=>$request->name,
            'surname'=>$request->surname,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'subject'=>$request->subject,
        ];


        \Mail::to('sinansaricayir@gmail.com')->send(new \App\Mail\FormMail($data));

        $create = Form::create($all);

        return redirect()->back();


    }


    public function delete($id)
    {
        $delete = Form::find($id)->delete();

        if($delete)
        {
            return redirect()->to('/admin/form')->with('status','Başarıyla Silindi')->send();
        }else{
            return redirect()->back()->with('status','Beklenmedik Bir Hata Oluştu!');
        }
    }
}
