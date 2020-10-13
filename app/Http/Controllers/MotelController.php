<?php

namespace App\Http\Controllers;

use App\Motels;
use Illuminate\Http\Request;

class MotelController extends Controller
{
    public function index(){

    }

    public function detail($id){
        $motel = Motels::find($id);
        return view('motelDetails',[
            'motel' => $motel,
        ]);
    }
}
