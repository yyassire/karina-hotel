<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helper\imageUpload;
use App\Models\Ormanevleri_room;
use App\Models\Ormanevleri_room_gallery;




class OrmanEvleriRoomController extends Controller
{
    public function index()
    {

        $data = Ormanevleri_room::orderBy('desk','asc')->get();
        return view('admin.ormanevleri-room.index',compact('data'));
    }

    public function ajaxdesk(Request $request){
        $all = $request->except('_token');
        $update = Ormanevleri_room::where('id','=',$all['id'])->update($all);
    }

    public function create()
    {
        return view('admin.ormanevleri-room.create');
    }

    public function store(Request $request)
    {
        $all = $request->except('_token');
        $all['image'] = imageUpload::singleUpload(rand(1, 9000), "room", $request->file('image'));
        $create = Ormanevleri_room::create($all);
        if($create){
            return redirect()->route('admin.ormanevleri-room.index')->with('status','Başarıyla Eklendi');
        }else{
            return redirect()->route('admin.ormanevleri-room.index')->with('status','Beklenmedik Bir Hata Oluştu!');
        }
    }

    public function edit($id)
    {
        $data = Ormanevleri_room::find($id);
        return view('admin.ormanevleri-room.edit',compact('data'));
    }

    public function update(Request $request,$id)
    {
        $all = $request->except('_token');
        $image = Ormanevleri_room::find($id);
        if($request->hasFile('image')){
            $old_image = $image->image;
            $old_big_image = \App\Helper\mHelper::largeImage($image['image']);
          	if(file_exists($old_image)){
              unlink($old_image);
            }
          	if(file_exists($old_big_image)){
              unlink($old_big_image);
            }

            $all['image'] = imageUpload::singleUpload(rand(1,9000),'room',$request->file('image'));
        }else{
            unset($all['image_one']);
        }


        $update = Ormanevleri_room::find($id)->update($all);
        if($update){
            return redirect()->route('admin.ormanevleri-room.index')->with('status','Başarıyla Güncellendi');
        }else{
            return redirect()->route('admin.ormanevleri-room.index')->with('status','Beklenmedik Bir Hata Oluştu!');
        }
    }

    public function delete($id)
    {
        $image = Ormanevleri_room::find($id);
        $room_gallery = Ormanevleri_room_gallery::where('room_id',$id)->get();
        foreach($room_gallery as $gallery){
            $old_img = $gallery->image;
            unlink($old_img);
        }
        $old_image = $image->image;
        $old_big_image = \App\Helper\mHelper::largeImage($image['image']);
        unlink($old_image);
        unlink($old_big_image);

        $delete = Ormanevleri_room::find($id)->delete();
        if($delete){
            return redirect()->route('admin.ormanevleri-room.index')->with('status','Başarıyla Silindi');
        }else{
            return redirect()->route('admin.ormanevleri-room.index')->with('status','Beklenmedik Bir Hata Oluştu!');
        }
    }
}
