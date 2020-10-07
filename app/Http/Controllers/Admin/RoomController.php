<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Motels;
use App\Rooms;
use App\TypeRooms;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function getIndex(){
        $rooms = Rooms::orderBy('id','DESC')->get();
        return view('admin.rooms.index',[
            'rooms' => $rooms
        ]);
    }

    public function getCreate(){
        $motels = Motels::all();
        $typeRooms = TypeRooms::all();
        return view('admin.rooms.create',[
            'motels' => $motels,
            'typeRooms' => $typeRooms
        ]);
    }

    public function postCreate(Request $request){
        $this->validate($request,[
            'priceHour'=>'required',
            'priceDay'=>'required',
            'image'=> 'required',
            'description' => 'required',
        ],[
            'priceHour.required'=>'Không được để trống giá giờ',
            'priceDay.required'=>'Không được để trống giá qua đêm',
            'image.required'=>'Không được để trống ảnh đại diện',
            'description.required' =>"Không được để trống mô tả",
        ]);

        if($request->hasFile('image')){
            // thiếu validate file image
            $avatar = $request->file('image');
            $avatar_name =  $this->checkFileImage($avatar, $request);
        }

        $room = new rooms();

        $room->motelID = $request->motelID;
        $room->typeID = $request->typeID;
        $room->priceHour = $request->priceHour;
        $room->priceDay = $request->priceDay;
        $room->avatar = $avatar_name;
        $room->description = $request->description;
        $room->save();

        return redirect('admin/rooms/index');
    }

    public function getUpdate($id){
        $room = Rooms::find($id);
        $motels = Motels::all();
        $typeRooms = TypeRooms::all();
        return view('admin.rooms.update',[
            'room' => $room,
            'motels' => $motels,
            'typeRooms' => $typeRooms
        ]);
    }

    public function postUpdate(Request $request, $id){
        $room = Rooms::find($id);
        $this->validate($request,[
            'priceHour'=>'required',
            'priceDay'=>'required',
            'description' => 'required',
        ],[
            'priceHour.required'=>'Không được để trống giá giờ',
            'priceDay.required'=>'Không được để trống giá qua đêm',
            'description.required' =>"Không được để trống mô tả",
        ]);

        if($request->hasFile('image')){
            // thiếu validate file image
            $avatar = $request->file('image');
            $avatar_name =  $this->checkFileImage($avatar, $request);
            $room->avatar = $avatar_name;
        }

        $room->motelID = $request->motelID;
        $room->typeID = $request->typeID;
        $room->priceHour = $request->priceHour;
        $room->priceDay = $request->priceDay;
        $room->description = $request->description;
        $room->save();

        return redirect('admin/rooms/index');
    }

    public function delete($id){
        $room = Rooms::find($id);
        $room->delete();
        return redirect('admin/rooms/index');
    }
}
