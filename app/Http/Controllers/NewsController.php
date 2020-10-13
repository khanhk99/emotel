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

    public function detail($id){
        $postAlls = Posts::orderBy('id', 'desc')->get();
        $post = Posts::find($id);
        return view('postDetails',[
            'post' => $post,
            'postAlls' => $postAlls,
        ]);
    }
}
