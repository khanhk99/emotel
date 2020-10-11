<?php

namespace App\Http\Controllers\Admin;

use App\Categories;
use App\Http\Controllers\Controller;
use App\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function getIndex(){
        $posts = Posts::paginate(10);
        return view('admin.posts.index',[
            'posts' => $posts
        ]);
    }

    public function getCreate(){
        $categories = Categories::all();
        return view('admin.posts.create',[
            'categories' => $categories
        ]);
    }

    public function postCreate(Request $request){
        $this->validate($request,[
            'title'=>'required',
            'image'=>'required',
            'content'=>'required'
        ],[
            'title.required' => "Không được để trống tiêu đề",
            'image.required' => "Vui lòng chọn ảnh đại diện",
            'content.required' => "Không được để trống nội dung",
        ]);
        if($request->hasFile('image')){
            // thiếu validate file image
            $avatar = $request->file('image');
            $avatar_name =  $this->checkFileImage($avatar, $request);
        }
//        $user_now = Auth::user()->id;
        $user_now = 1;
        $post = new Posts();

        $post->userID = $user_now;
        $post->title = $request->title;
        $post->categoryID = $request->categoryID;
        $post->content = $request->content;
        $post->avatar = $avatar_name;

        $post->save();

        return redirect('admin/posts/index');
    }

    public function getUpdate($id){
        $post = Posts::find($id);
        $categories = Categories::all();
        return view('admin.posts.update',[
            'categories' => $categories,
            'post' => $post
        ]);
    }

    public function postUpdate(Request $request, $id){
        $post = Posts::find($id);

        $this->validate($request,[
            'title'=>'required',
            'image'=>'required',
            'content'=>'required'
        ],[
            'title.required' => "Không được để trống tiêu đề",
            'image.required' => "Vui lòng chọn ảnh đại diện",
            'content.required' => "Không được để trống nội dung",
        ]);
        if($request->hasFile('image')){
            // thiếu validate file image
            $avatar = $request->file('image');
            $avatar_name =  $this->checkFileImage($avatar, $request);
        }
//        $user_now = Auth::user()->id;
        $user_now = 1;
        $post->userID = $user_now;
        $post->title = $request->title;
        $post->categoryID = $request->categoryID;
        $post->content = $request->content;
        $post->avatar = $avatar_name;

        $post->save();

        return redirect('admin/posts/index');
    }

    public function delete($id){
        $post = Posts::find($id);
        $post->delete();
        return redirect('admin/posts/index');
    }
}
