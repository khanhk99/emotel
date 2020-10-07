<?php

namespace App\Http\Controllers\Admin;

use App\Banners;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BannerController extends Controller
{
    public function getIndex(){
        $banners = Banners::all();
        return view('admin.banners.index',[
            'banners' => $banners,
        ]);
    }

    public function getCreate(){
        return view('admin.banners.create');
    }

    public function postCreate(Request $request){
        if($request->hasFile('image')){
            // thiếu validate file image
            $avatar = $request->file('image');
            $avatar_name =  $this->checkFileImage($avatar, $request);

            $banner = new Banners();
            $banner->avatar = $avatar_name;
            $banner->save();

            return redirect('admin/banners/index');
        }
    }

    public function delete($id){
        $banner = Banners::find($id);
        $banner->delete();
        return redirect('admin/banners/index');
    }
}
