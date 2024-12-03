<?php

namespace App\Http\Controllers\admin;

use App\Helper\imageUpload;
use App\Http\Controllers\Controller;
use App\Models\Page_gallery;
use Illuminate\Http\Request;
use File;

class PageGalleryController extends Controller
{
    public function index($id)
    {
        $data = Page_gallery::where('page_id',$id)->orderBy('desk', 'asc')->get();
        return view('admin.page_gallery.index', ['data' => $data,'id'=>$id]);
    }

    public function ajaxdesk(Request $request){
        $all = $request->except('_token');
        $update = Page_gallery::where('id','=',$all['id'])->update($all);
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
                $imageName = "images/page_gallery/".rand(1,999).'-'.$image->getClientOriginalName();
                if(File::exists($imageName))
                {
                    return redirect()->to('/admin/page_gallery/'.$all['page_id'])->with('status','Aynı isimde daha önce yükleme işlemi yapılmış. Lütfen resim adını değiştirin veya farklı bir fotoğraf yükleyin !')->send();
                }
                $image->move(public_path('images/page_gallery'),$imageName);
                Page_gallery::create([
                    'page_id'=>$all['page_id'],
                    'image' => $imageName
                ]);
            }
        }else
        {
            dd('Lütfen Resim Seçiniz ! ');
        }
       
        return redirect()->to('/admin/page_gallery/'.$all['page_id'])->send();
        
    }

    public function delete($id, $page_id)
    {
        $image = Page_gallery::find($id);
        $old_image = $image->image;
        unlink($old_image);

        $delete = Page_gallery::find($id)->delete();
        if ($delete) {
            return redirect()->to('/admin/page_gallery/'.$page_id)->send();
        } else {
            return redirect()->back()->with('status', 'Beklenmedik Bir Hata Oluştu!');
        }
    }
}
