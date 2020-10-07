<?php

namespace App\Http\Controllers\Admin;

use App\Banners;
use App\Http\Controllers\Controller;
use App\Motels;
use Illuminate\Http\Request;

class MotelController extends Controller
{
    public function getIndex(){
        $motels = Motels::all();
        return view('admin.motels.index',[
            'motels' => $motels
        ]);
    }

    public function getCreate(){
        return view('admin.motels.create');
    }

    public function postCreate(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'image'=>'required',
            'address'=> 'required',
        ],[
            'name.required'=>'Không được để trống tên nhà nghỉ',
            'image.required'=>'Không được để trống ảnh đại diện',
            'address.required'=>'Không được để trống địa chỉ',
        ]);

        if($request->hasFile('image')){
            // thiếu validate file image
            $avatar = $request->file('image');
            $avatar_name =  $this->checkFileImage($avatar, $request);
        }

        $motel = new Motels();

        $motel->name = $request->name;
        $motel->avatar = $avatar_name;
        $motel->address = $request->address;
        $motel->prices = $request->prices;
        $motel->save();

        return redirect('admin/motels/index');
    }

    public function getUpdate($id){
        $motel = Motels::find($id);
        return view('admin.motels.update',[
            'motel'=>$motel
        ]);
    }

    public function postUpdate(Request $request, $id){
        $motel = Motels::find($id);
        $this->validate($request,[
            'name'=>'required',
            'address'=> 'required',
        ],[
            'name.required'=>'Không được để trống tên nhà nghỉ',
            'address.required'=>'Không được để trống địa chỉ',
        ]);

        if($request->hasFile('image')){
            // thiếu validate file image
            $avatar = $request->file('image');
            $avatar_name =  $this->checkFileImage($avatar, $request);
            $motel->avatar = $avatar_name;
        }

        $motel->name = $request->name;
        $motel->address = $request->address;
        $motel->prices = $request->prices;
        $motel->save();

        return redirect('admin/motels/index');
    }

    public function delete($id){
        $motel = motels::find($id);
        $motel->delete();
        return redirect('admin/motels/index');
    }
}
