<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider_category;
use App\Models\Slider;



class SliderCategoryController extends Controller
{
    public function index(){
        $data = Slider_category::orderBy('desk','asc')->get();
        return view('admin.slider_category.index',compact('data'));
    }

    public function ajaxdesk(Request $request){
        $all = $request->except('_token');
        $update = Slider_category::where('id','=',$all['id'])->update($all);
    }


    public function store(Request $request){
        $all = $request->except('_token');
        $add = Slider_category::create($all);
        if($add){
            return redirect()->route('admin.slider_category.index')->with('status','Başarıyla Eklendi');
        }else{
            return redirect()->back()->with('status','Beklenmedik Bir Hata Oluştu!');
        }
    }


    public function edit($id){
        $data = Slider_category::find($id);
        return view('admin.slider_category.edit',compact('data'));
    }


    public function update(Request $request,$id){
        $all = $request->except('_token');
        $update = Slider_category::find($id)->update($all);
        if($update){
            return redirect()->route('admin.slider_category.index')->with('status','Başarıyla Güncellendi');
        }else{
            return redirect()->back()->with('status','Beklenmedik Bir Hata Oluştu!');
        }
    }


    public function delete($id){
        $slider = Slider::where('slider_id',$id)->get();
        foreach($slider as $slider){
            $old_img = $slider->image;
            unlink($old_img);
        }
        $delete = Slider_category::find($id)->delete();
        if($delete){
            return redirect()->route('admin.slider_category.index')->with('status','Başarıyla Silindi');
        }else{
            return redirect()->back()->with('status','Beklenmedik Bir Hata Oluştu!');
        }
    }
}
