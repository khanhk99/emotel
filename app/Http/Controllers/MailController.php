<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MailController extends Controller
{
    public function index(Request $request){
        $user = Auth::user();
        $userSend = $user->id;
        $userReceiver = $request->userReceiver;
        $title = $request->title;
        $content = $request->content;
    }
}
