<?php

namespace App\Http\Controllers;

use App\Motels;
use App\Rooms;
use Illuminate\Http\Request;

class MotelController extends Controller
{
    public function index(){
        $motels = Motels::paginate(6);
        return view('listMotel',[
            'motels' => $motels
        ]);
    }

    public function detail($id){
        $motel = Motels::find($id);
        return view('motelDetails',[
            'motel' => $motel,
        ]);
    }

    public function roomList($motelID){
        $rooms = Rooms::where('motelID',$motelID)->get();
        return view('roomList',[
            'rooms' => $rooms
        ]);
    }
}
