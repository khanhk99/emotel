<?php

namespace App\Http\Controllers\Admin;

use App\Categories;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getindex(){
        $categories = Categories::paginate(10);
        return view('admin.categories.index',[
            'categories' => $categories
        ]);
    }

    public function getCreate(){
        return view('admin.categories.create');
    }

    public function postCreate(Request $request){
        $this->validate($request,[
            'name'=>'required'
        ],[
            'name.required' => "Không được để trống tên chủ đề"
        ]);

        $category = new Categories();
        $category->name = $request->name;
        $category->save();
        return redirect('admin/categories/index');
    }

    public function delete($id){
        $category = Categories::find($id);
        $category->delete();
        return redirect('admin/categories/index');
    }
}
