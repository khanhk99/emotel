<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getIndex(){
        $users = User::orderBy('id','DESC')->paginate(10);
        return view('admin.users.index',[
            'users' => $users
        ]);
    }

    public function getCreate(){
        return view('admin.users.create');
    }

    public function postCreate(Request $request){
        $this->validate($request,[
            'username'=>'required|min:3|max:32',
            'email'=>'required|email|unique:users,email',
            'password'=> 'required|min:6|max:32',
            'rewritePassword'=>'required|same:password'
        ],[
            'username.required'=>'Không được để trống tên đăng nhập',
            'username.min'=>'Tên đăng nhập không được ít hơn 3 ký tự',
            'username.max'=>'Tên đăng nhập không được nhiều hơn 32 ký tự',
            'email.required'=>'Không được để trống email',
            'email.email'=>'Email không đúng định dạng',
            'email.unique'=>'Email này đã tồn tại',
            'password.required'=>'Không được để trống mật khẩu',
            'password.min'=>'Mật khẩu không được ít hơn 6 ký tự',
            'password.max'=>'Mật khẩu không được nhiều hơn 32 ký tự',
            'rewritePassword.required'=>'Mật khẩu nhập lại không đúng',
            'rewritePassword.same'=>'Mật khẩu nhập lại không đúng',
        ]);

        $user =new User();
        $user->username = $request->username;
        if(empty($request->name)){
            $user->name = $request->username;
        }
        else{
            $user->name = $request->name;
        }

        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->phoneNumber = $request->phoneNumber;
        $user->role = $request->role;
        $user->save();

        return redirect('admin/users/index');
    }

    public function getUpdate($id){
        $user = Users::find($id);
        return view('admin.users.update',[
            'user'=>$user
        ]);
    }

    public function postUpdate(Request $request, $id){

        $user = Users::find($id);
        if(empty($request->name)){
            $user->name = $request->username;
        }
        else{
            $user->name = $request->name;
        }

        if($request->changePassword == "on"){
            $this->validate($request,[
                'password'=> 'required|min:6|max:32|regex:/[0-9]/|regex:/[A-Z]/',
                'rewritePassword'=>'required|same:password'
            ],[
                'password.required'=>'Không được để trống mật khẩu',
                'password.min'=>'Mật khẩu không được ít hơn 6 ký tự',
                'password.max'=>'Mật khẩu không được nhiều hơn 32 ký tự',
                'password.regex'=>'Mật khẩu phải có đủ chữ hoa, chữ thường và số',
                'rewritePassword.required'=>'Mật khẩu nhập lại không đúng',
                'rewritePassword.same'=>'Mật khẩu nhập lại không đúng'
            ]);
            $user->password = bcrypt($request->password);
        }
        $user->phoneNumber = $request->phoneNumber;
        $user->role = $request->role;
        $user->address = $request->address;
        $user->save();

        return redirect('admin/users/index');
    }

    public function delete($id){
        $user = Users::find($id);
        $user->delete();
        return redirect('admin/users/index');
    }
}
