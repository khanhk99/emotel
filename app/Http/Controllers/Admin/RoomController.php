<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Motels;
use App\Rooms;
use App\TypeRooms;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function getIndex()
    {
        $rooms = Rooms::orderBy('id', 'DESC')->paginate(10);
        return view('admin.rooms.index', [
            'rooms' => $rooms
        ]);
    }

    public function getCreate()
    {
        $users = User::where('role',2)->get();
        $motels = Motels::all();
        $typeRooms = TypeRooms::all();
        return view('admin.rooms.create', [
            'motels' => $motels,
            'typeRooms' => $typeRooms,
            'users' => $users,
        ]);
    }

    public function postCreate(Request $request)
    {
        $this->validate($request, [
            'priceHour' => 'required',
            'priceDay' => 'required',
            'images' => 'required|max:4096',
            'description' => 'required',
        ], [
            'priceHour.required' => 'Không được để trống giá giờ',
            'priceDay.required' => 'Không được để trống giá qua đêm',
            'images.required' => 'Không được để trống ảnh đại diện',
            'images.max' => 'Kích thước không được vượt quá 4096MB',
            'description.required' => "Không được để trống mô tả",
        ]);

        if ($request->hasFile('images')) {
            $images_name = '';
            foreach ($request->images as $image) {
                $image_name = time() . '-' . $image->getClientOriginalName();
                $image->move('assets/images',$image_name);

                $images_name .= '--' . $image_name;
            }
        }

        $room = new rooms();
        $motelID = Motels::where('id',$request->motelID)->get();
        $userID = $motelID[0]->userID;

        $room->motelID = $request->motelID;
        $room->userID = $userID;
        $room->typeID = $request->typeID;
        $room->priceHour = $request->priceHour;
        $room->priceDay = $request->priceDay;
        $room->avatar = $images_name;
        $room->description = $request->description;
        $room->roomNumber = $request->roomNumber;
        $room->save();

        return redirect('admin/rooms/index');
    }

    public function getUpdate($id)
    {
        $room = Rooms::find($id);
        $users = User::where('role',2)->get();
        $motels = Motels::all();
        $typeRooms = TypeRooms::all();
        return view('admin.rooms.update', [
            'room' => $room,
            'motels' => $motels,
            'typeRooms' => $typeRooms,
            'users' => $users,
        ]);
    }

    public function postUpdate(Request $request, $id)
    {
        $room = Rooms::find($id);
        $this->validate($request, [
            'priceHour' => 'required',
            'priceDay' => 'required',
            'description' => 'required',
        ], [
            'priceHour.required' => 'Không được để trống giá giờ',
            'priceDay.required' => 'Không được để trống giá qua đêm',
            'description.required' => "Không được để trống mô tả",
        ]);

        if ($request->hasFile('image')) {
            // thiếu validate file image
            $avatar = $request->file('image');
            $avatar_name = $this->checkFileImage($avatar, $request);
            $room->avatar = $avatar_name;
        }

        $userID = Motels::where('id', $room->motelID)->user->id;
        $room->motelID = $request->motelID;
        $room->userID = $userID;
        $room->typeID = $request->typeID;
        $room->priceHour = $request->priceHour;
        $room->priceDay = $request->priceDay;
        $room->description = $request->description;
        $room->roomNumber = $request->roomNumber;
        $room->save();

        return redirect('admin/rooms/index');
    }

    public function delete($id)
    {
        $room = Rooms::find($id);
        $room->delete();
        return redirect('admin/rooms/index');
    }
}
