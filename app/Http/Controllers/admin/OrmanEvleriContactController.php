<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ormanevleri_contact;


class OrmanEvleriContactController extends Controller
{
    public function index(){
        $data = Ormanevleri_contact::first();
        return view('admin.ormanevleri-contact.index',compact('data'));
    }

    public function update(Request $request,$id){

        $all = $request->except('_token','image','logo','sub_logo');




        if($request->file('logo') !=""){
            $image2 = Ormanevleri_contact::find($id);
            $old_image2 = $image2->logo;
            if(isset($old_image2)){
                unlink($old_image2);
            }
        }

        if($request->file('sub_logo') !=""){
            $image3 = Ormanevleri_contact::find($id);
            $old_image3 = $image3->sub_logo;
            if(isset($old_image3)){
                unlink($old_image3);
            }
        }



        if($request->file('image') !=""){
        $image = $request->file('image');
        $imageName1 = "images/ormanevleri-contact/".rand(1,999).'-'.$image->getClientOriginalName();
        $image->move(public_path('images/ormanevleri-contact'),$imageName1);
        Ormanevleri_contact::find($id)->update([
            'image' => $imageName1
        ]);
        }

        if($request->file('logo') !=""){
        $logo = $request->file('logo');
        $imageName2 = "images/ormanevleri-contact/".rand(1,999).'-'.$logo->getClientOriginalName();
        $logo->move(public_path('images/ormanevleri-contact'),$imageName2);
        Ormanevleri_contact::find($id)->update([
            'logo' => $imageName2
        ]);
        }

        if($request->file('sub_logo') !=""){
        $sub_logo = $request->file('sub_logo');
        $imageName3 = "images/ormanevleri-contact/".rand(1,999).'-'.$sub_logo->getClientOriginalName();
        $sub_logo->move(public_path('images/ormanevleri-contact'),$imageName3);
        Ormanevleri_contact::find($id)->update([
            'sub_logo' => $imageName3
        ]);
        }



        $update = Ormanevleri_contact::find($id)->update($all);

        return redirect()->route('admin.ormanevleri-contact.index')->with('status','Başarıyla Güncellendi');

    }
}
