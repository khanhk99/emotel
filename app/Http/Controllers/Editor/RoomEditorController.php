<?php

namespace App\Http\Controllers\Editor;

use App\Http\Controllers\Controller;
use App\Motels;
use App\Rooms;
use App\TypeRooms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoomEditorController extends Controller
{
    public function getIndex()
    {
        $user = Auth::user();
        $motels = Motels::where('userID',$user->id)->get();
        return view('editor.rooms.index', [
            'user' => $user,
            'motels' => $motels,
        ]);
    }

    public function getCreate()
    {
        $user = Auth::user();
        $motels = Motels::where('userID',$user->id)->get();
        $typeRooms = TypeRooms::all();
        return view('editor.rooms.create', [
            'motels' => $motels,
            'typeRooms' => $typeRooms,
            'user' => $user,
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

        $user_now = Auth::user();
        $room->userID = $user_now->id;
        $room->motelID = $request->motelID;
        $room->typeID = $request->typeID;
        $room->priceHour = $request->priceHour;
        $room->priceDay = $request->priceDay;
        $room->avatar = $images_name;
        $room->description = $request->description;
        $room->roomNumber = $request->roomNumber;
        $room->save();

        return redirect($user_now->id.'/editor/rooms/index');
    }

    public function getUpdate($id)
    {
        $user = Auth::user();
        $room = Rooms::find($id);
        $motels = Motels::all();
        $typeRooms = TypeRooms::all();
        return view('editor.rooms.update', [
            'room' => $room,
            'motels' => $motels,
            'typeRooms' => $typeRooms,
            'user' => $user,
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

        $user = Auth::user();
        $room->typeID = $request->typeID;
        $room->priceHour = $request->priceHour;
        $room->priceDay = $request->priceDay;
        $room->description = $request->description;
        $room->roomNumber = $request->roomNumber;
        $room->save();

        return redirect($user->id.'/editor/rooms/index');
    }

    public function delete($id, $userID)
    {
        $user_now = Auth::user();
        $room = Rooms::find($id);
        $room->delete();
        return redirect($user_now->id.'/editor/rooms/index');
    }
}
