<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\TypeRooms;
use Illuminate\Http\Request;

class TypeRoomController extends Controller
{
    public function getIndex(){
        $typeRooms = TypeRooms::paginate(10);
        return view('admin.typerooms.index',[
            'typeRooms' => $typeRooms
        ]);
    }

    public function getCreate(){
        return view('admin.typerooms.create');
    }

    public function postCreate(Request $request){
        $this->validate($request,[
            'name'=>'required|max:50'
        ],[
            'name.required'=>"Không được để trống tên phòng",
            'name.max'=>"Độ dài tên phòng không được quá 50 ký tự"
        ]);

        $typeRoom = new TypeRooms();
        $typeRoom->name = $request->name;
        $typeRoom->save();

        return redirect('admin/typerooms/index');
    }

    public function delete($id){
        $typeRoom = TypeRooms::find($id);
        $typeRoom->delete();
        return redirect('admin/typerooms/index');
    }
}
