<?php

namespace App\Http\Controllers;

use App\Motels;
use App\Posts;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $motels = Motels::all();
        $posts = Posts::orderBy('id', 'asc')->take(3)->get();
        return view('index',[
            'motels' => $motels,
            'posts' => $posts
        ]);
    }
}
