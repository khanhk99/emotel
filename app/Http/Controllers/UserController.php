<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getLogin(){
        return view('login');
    }

    public function getRegister(){
        return view('register');
    }

    public function postLogin(){

    }

    public function postRegister(){

    }
}
