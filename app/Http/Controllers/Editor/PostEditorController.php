<?php

namespace App\Http\Controllers\Editor;

use App\Categories;
use App\Http\Controllers\Controller;
use App\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostEditorController extends Controller
{
    public function getIndex(){
        $user = Auth::user();
        $posts = Posts::where('userID',$user->id)->orderBy('id','DESC')->paginate(10);
        return view('editor.posts.index',[
            'posts' => $posts,
            'user' => $user,
        ]);
    }

    public function getCreate($userID){
        $user = Auth::user();
        $categories = Categories::all();
        return view('editor.posts.create',[
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
        $user_now = Auth::user()->id;
        $post = new Posts();

        $post->userID = $user_now;
        $post->title = $request->title;
        $post->categoryID = $request->categoryID;
        $post->content = $request->content;
        $post->avatar = $avatar_name;

        $post->save();

        return redirect($user_now.'/editor/posts/index');
    }

    public function getUpdate($userID, $id){
        $post = Posts::find($id);
        $categories = Categories::all();
        return view('editor.posts.update',[
            'categories' => $categories,
            'post' => $post
        ]);
    }

    public function postUpdate(Request $request, $id){
        $post = Posts::find($id);

        $this->validate($request,[
            'title'=>'required',
//            'image'=>'required',
            'content'=>'required'
        ],[
            'title.required' => "Không được để trống tiêu đề",
//            'image.required' => "Vui lòng chọn ảnh đại diện",
            'content.required' => "Không được để trống nội dung",
        ]);
        if($request->hasFile('image')){
            // thiếu validate file image
            $avatar = $request->file('image');
            $avatar_name =  $this->checkFileImage($avatar, $request);
            $post->avatar = $avatar_name;
        }
        $user_now = Auth::user()->id;
        $post->title = $request->title;
        $post->categoryID = $request->categoryID;
        $post->content = $request->content;

        $post->save();

        return redirect($user_now.'/editor/posts/index');
    }

    public function delete($userID, $id){
        $user_now = Auth::user()->id;
        $post = Posts::find($id);
        $post->delete();
        return redirect($user_now.'/editor/posts/index');
    }
}
