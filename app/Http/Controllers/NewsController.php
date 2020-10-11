<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $posts = Posts::paginate(3);
        return view('blog',[
            'posts' => $posts
        ]);
    }
}
