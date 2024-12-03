<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pdf;
use App\Models\Language;


class PdfController extends Controller
{
    public function index(){
		if (session()->has('lang')) {
            $currentLang = Language::where('code', session()->get('lang'))->first();
        } else {
            $currentLang = Language::where('is_default', 1)->first();
        }
        $data = Pdf::orderBy('desk','asc')->where('language_id',$currentLang['id'])->get();
      return view('admin.pdf.index',compact('data'));
    }

    public function ajaxdesk(Request $request){
        $all = $request->except('_token');
        $update = Pdf::where('id','=',$all['id'])->update($all);
    }


    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'file' => 'required|max:2048',
        ],
        [
            'file.mimes' => 'Lütfen .pdf uzantılı dosya yükleyiniz ! ',
            'file.required' => 'Lütfen .pdf uzantılı dosya yükleyiniz ! ',
            'name.required' => 'Lütfen Pdf İçin Bir Ad Giriniz !'
        ]);

        $data = new Pdf();
        $file = $request->file;
        $filename = time().'.'.$file->getClientOriginalExtension();
        $request->file->move('pdf',$filename);
        $data->name=$request->name;
        $data->language_id=$request->language_id;
        $data->file=$filename;
        $data->save();

        return redirect()->route('admin.pdf.index')->with('status','Başarıyla Eklendi');
    }


    public function delete($id){

        $pdf = Pdf::find($id);
        $old_pdf = 'pdf/'.$pdf->file;
        unlink($old_pdf);

        $delete = Pdf::find($id)->delete();

        if($delete){
            return redirect()->route('admin.pdf.index')->with('status','Başarıyla Silindi');
        }else{
            return redirect()->back()->with('status','Beklenmedik Bir Hata Oluştu!');
        }
    }
}
