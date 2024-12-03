<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Helper\imageUpload;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;



class AccountController extends Controller
{
    public function index(){
        $id = Auth::user()->id;
        $user = User::where('id',$id)->get();
        return view('admin.account.index',['user'=>$user[0]]);
    }

    public function update(Request $request){
        $id = Auth::user()->id;
        $all = $request->except('_token');
        if(@$all['image'] != ""){
            File::deleteDirectory('images/account');
            $all['image'] = imageUpload::singleUpload(rand(1,9000),'account',$request->file('image'));
        }else{
            unset($all['image']);
        }
        $update = User::where('id',$id)->update($all);
        if($update){
            return redirect()->back()->with('status','Başarıyla Güncellendi');
        }else{
            return redirect()->back()->with('status','Beklenmedik Bir Hata Oluştu!');
        }

    }
}
