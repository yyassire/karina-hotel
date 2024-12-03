<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helper\imageUpload;
use App\Models\Page_detail;

class PageDetailController extends Controller
{
    public function index($id)
    {
        $data = Page_detail::where('page_id',$id)->orderBy('desk','asc')->get();
        return view('admin.page_detail.index',compact('data','id'));
    }

    public function ajaxdesk(Request $request){
        $all = $request->except('_token');
        $update = Page_detail::where('id','=',$all['id'])->update($all);
    }

    public function create($id)
    {
        return view('admin.page_detail.create',compact('id'));
    }

    public function store(Request $request){
        $all = $request->except('_token');
        $add = Page_detail::create($all);
        if($add){
            return redirect()->to('/admin/page_detail/'.$all['page_id'])->with('status','Başarıyla Eklendi');
        }else{
            return redirect()->back()->with('status','Beklenmedik Bir Hata Oluştu!');
        }
    }

    public function edit($id){
        $data = Page_detail::find($id);
        return view('admin.page_detail.edit',compact('data'));
    }

    public function update(Request $request,$id){
        $all = $request->except('_token');

        $update = Page_detail::find($id)->update($all);
        if($update){
            return redirect()->to('/admin/page_detail/'.$all['page_id'])->with('status','Başarıyla Güncellendi');
        }else{
            return redirect()->to('/admin/page_detail/'.$all['page_id'])->with('status','Beklenmedik Bir Hata Oluştu!');
        }
    }


    public function delete($id,$page_id)
    {
       

        $delete = Page_detail::find($id)->delete();
        if($delete){
            return redirect()->to('/admin/page_detail/'.$page_id)->with('status','Başarıyla Silindi');
        }else{
            return redirect()->to('/admin/page_detail/'.$page_id)->with('status','Beklenmedik Bir Hata Oluştu!');
        }
    }
}
