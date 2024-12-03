<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helper\imageUpload;
use App\Models\Ormanevleri_room_gallery;
use File;


class OrmanEvleriRoomGalleryController extends Controller
{
    public function index($id)
    {
        $data = Ormanevleri_room_gallery::where('room_id',$id)->orderBy('desk', 'asc')->get();
        return view('admin.ormanevleri-room_gallery.index',compact('data','id'));
    }

    public function ajaxdesk(Request $request){
        $all = $request->except('_token');
        $update = Ormanevleri_room_gallery::where('id','=',$all['id'])->update($all);
    }


    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required',
            'image.*' =>  'mimes:jpeg,png,jpg,gif,svg',

        ],
        [
            'image.required' => 'Lütfen Resim Giriniz ! ',
            'image.mimes' => 'Lütfen jpeg,jpg,png,bmp,gif,svg formatlarında dosya yükleyiniz !'

        ]);

        $all = $request->except('_token');

        if($request->has('image'))
        {
            foreach($request->file('image') as $image){
                $imageName = "images/ormanevleri-room_gallery/".rand(1,999).'-'.$image->getClientOriginalName();
                if(File::exists($imageName))
                {
                    return redirect()->to('/admin/ormanevleri-room_gallery/'.$all['room_id'])->with('status','Aynı isimde daha önce yükleme işlemi yapılmş. Lütfen resim adını değiştirin veya farklı bir fotoğraf yükleyin !')->send();
                }
                $image->move(public_path('images/ormanevleri-room_gallery'),$imageName);
                Ormanevleri_room_gallery::create([
                    'room_id'=>$all['room_id'],
                    'image' => $imageName
                ]);
            }
        }else
        {
            dd('Lütfen Resim Seçiniz ! ');
        }


        return redirect()->to('/admin/ormanevleri-room_gallery/'.$all['room_id'])->with('status', 'Başarıyla Eklendi')->send();

    }

    public function delete($id, $room_id)
    {
      
        $image = Ormanevleri_room_gallery::find($id);
        $old_image = $image->image;
        unlink($old_image);

        $delete = Ormanevleri_room_gallery::find($id)->delete();
        if ($delete) {
            return redirect()->to('/admin/ormanevleri-room_gallery/'.$room_id)->with('status', 'Başarıyla Silindi')->send();
        } else {
            return redirect()->back()->with('status', 'Beklenmedik Bir Hata Oluştu!');
        }
    }
}
