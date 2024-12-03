<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helper\imageUpload;
use App\Models\Page_detail_gallery;
use File;


class PageDetailGalleryController extends Controller
{
    public function index($id)
    {
        $data = Page_detail_gallery::where('page_detail_id',$id)->orderBy('desk', 'asc')->get();
        return view('admin.page_detail_gallery.index',compact('data','id'));
    }

    public function ajaxdesk(Request $request){
        $all = $request->except('_token');
        $update = Page_detail_gallery::where('id','=',$all['id'])->update($all);
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
                $imageName = "images/page_detail_gallery/".rand(1,999).'-'.$image->getClientOriginalName();
                if(File::exists($imageName))
                {
                    return redirect()->to('/admin/page_detail_gallery/'.$all['page_detail_id'])->with('status','Aynı isimde daha önce yükleme işlemi yapılmış. Lütfen resim adını değiştirin veya farklı bir fotoğraf yükleyin !')->send();
                }
                $image->move(public_path('images/page_detail_gallery'),$imageName);
                Page_detail_gallery::create([
                    'page_detail_id'=>$all['page_detail_id'],
                    'image' => $imageName
                ]);
            }
        }else
        {
            dd('Lütfen Resim Seçiniz ! ');
        }
        
        
        return redirect()->to('/admin/page_detail_gallery/'.$all['page_detail_id'])->with('status', 'Başarıyla Eklendi')->send();
        
    }

    public function delete($id, $page_detail_id)
    {
        $image = Page_detail_gallery::find($id);
    

        $delete = Page_detail_gallery::find($id)->delete();
        if ($delete) {
            return redirect()->to('/admin/page_detail_gallery/'.$page_detail_id)->with('status', 'Başarıyla Silindi')->send();
        } else {
            return redirect()->back()->with('status', 'Beklenmedik Bir Hata Oluştu!');
        }
    }
}
