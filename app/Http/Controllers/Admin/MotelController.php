<?php

namespace App\Http\Controllers\Admin;

use App\Banners;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Motels;
use Illuminate\Http\Request;

class MotelController extends Controller
{
    public function getIndex(){
        $motels = Motels::paginate(10);
        return view('admin.motels.index',[
            'motels' => $motels
        ]);
    }

    public function getCreate(){
        $users = User::where('role',2)->get();
        return view('admin.motels.create',[
            'users'=>$users,
        ]);
    }

    public function postCreate(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'images'=>'required|max:4096',
            'address'=> 'required',
            'phoneNumber'=> 'required',
        ],[
            'name.required'=>'Không được để trống tên nhà nghỉ',
            'images.required'=>'Không được để trống ảnh đại diện',
            'images.max' => 'Kích thước không được vượt quá 4096MB',
            'address.required'=>'Không được để trống địa chỉ',
            'phoneNumber.required'=>'Không được để trống số điện thoại',
        ]);

        if ($request->hasFile('images')) {
            $images_name = '';
            foreach ($request->images as $image) {
                $image_name = time() . '-' . $image->getClientOriginalName();
                $image->move('assets/images',$image_name);

                $images_name .= '--' . $image_name;
            }
        }

        $motel = new Motels();

        $motel->userID = $request->userID;
        $motel->name = $request->name;
        $motel->avatar = $images_name;
        $motel->address = $request->address;
        $motel->phoneNumber = $request->phoneNumber;
        $motel->description = $request->description;
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
            'images'=>'max:4096',
            'address'=> 'required',
            'phoneNumber'=> 'required',
        ],[
            'name.required'=>'Không được để trống tên nhà nghỉ',
            'images.max' => 'Kích thước không được vượt quá 4096MB',
            'address.required'=>'Không được để trống địa chỉ',
            'phoneNumber.required'=>'Không được để trống số điện thoại',
        ]);

        if ($request->hasFile('images')) {
            $images_name = '';
            foreach ($request->images as $image) {
                $image_name = time() . '-' . $image->getClientOriginalName();
                $image->move('assets/images',$image_name);

                $images_name .= '--' . $image_name;
            }
            $motel->avatar = $images_name;
        }

        $motel->userID = $request->userID;
        $motel->name = $request->name;
        $motel->address = $request->address;
        $motel->phoneNumber = $request->phoneNumber;
        $motel->description = $request->description;
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
