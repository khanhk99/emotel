<?php

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin', 'middleware' => 'checkAdmin'], function(){
    Route::get('/','App\Http\Controllers\Admin\BannerController@getIndex');
    Route::group(['prefix' => 'banners'], function(){
        Route::get('index','App\Http\Controllers\Admin\BannerController@getIndex');
        Route::get('create','App\Http\Controllers\Admin\BannerController@getCreate');
        Route::post('create','App\Http\Controllers\Admin\BannerController@postCreate');
        Route::post('delete','App\Http\Controllers\Admin\BannerController@delete');
    });
    Route::group(['prefix' => 'users'], function(){
        Route::get('index','App\Http\Controllers\Admin\UserController@getIndex');
        Route::get('create','App\Http\Controllers\Admin\UserController@getCreate');
        Route::post('create','App\Http\Controllers\Admin\UserController@postCreate');
        Route::get('update/{id}','App\Http\Controllers\Admin\UserController@getUpdate');
        Route::post('update/{id}','App\Http\Controllers\Admin\UserController@postUpdate');
        Route::get('delete/{id}','App\Http\Controllers\Admin\UserController@delete');
    });
    Route::group(['prefix' => 'motels'], function(){
        Route::get('index','App\Http\Controllers\Admin\MotelController@getIndex');
        Route::get('create','App\Http\Controllers\Admin\MotelController@getCreate');
        Route::post('create','App\Http\Controllers\Admin\MotelController@postCreate');
        Route::get('update/{id}','App\Http\Controllers\Admin\MotelController@getUpdate');
        Route::post('update/{id}','App\Http\Controllers\Admin\MotelController@postUpdate');
        Route::get('delete/{id}','App\Http\Controllers\Admin\MotelController@delete');
    });
    Route::group(['prefix' => 'typerooms'], function(){
        Route::get('index','App\Http\Controllers\Admin\TypeRoomController@getIndex');
        Route::get('create','App\Http\Controllers\Admin\TypeRoomController@getCreate');
        Route::post('create','App\Http\Controllers\Admin\TypeRoomController@postCreate');
        Route::get('delete/{id}','App\Http\Controllers\Admin\TypeRoomController@delete');
    });
    Route::group(['prefix' => 'rooms'], function(){
        Route::get('index','App\Http\Controllers\Admin\RoomController@getIndex');
        Route::get('create','App\Http\Controllers\Admin\RoomController@getCreate');
        Route::post('create','App\Http\Controllers\Admin\RoomController@postCreate');
        Route::get('update/{id}','App\Http\Controllers\Admin\RoomController@getUpdate');
        Route::post('update/{id}','App\Http\Controllers\Admin\RoomController@postUpdate');
        Route::get('delete/{id}','App\Http\Controllers\Admin\RoomController@delete');
    });
    Route::group(['prefix' => 'categories'], function(){
        Route::get('index','App\Http\Controllers\Admin\CategoryController@getIndex');
        Route::get('create','App\Http\Controllers\Admin\CategoryController@getCreate');
        Route::post('create','App\Http\Controllers\Admin\CategoryController@postCreate');
        Route::get('delete/{id}','App\Http\Controllers\Admin\CategoryController@delete');
    });
    Route::group(['prefix' => 'posts'], function(){
        Route::get('index','App\Http\Controllers\Admin\PostController@getIndex');
        Route::get('create','App\Http\Controllers\Admin\PostController@getCreate');
        Route::post('create','App\Http\Controllers\Admin\PostController@postCreate');
        Route::get('update/{id}','App\Http\Controllers\Admin\PostController@getUpdate');
        Route::post('update/{id}','App\Http\Controllers\Admin\PostController@postUpdate');
        Route::get('delete/{id}','App\Http\Controllers\Admin\PostController@delete');
    });
});

//endBackend

//Frontend
Route::get('/','App\Http\Controllers\HomeController@index');
Route::get('posts','App\Http\Controllers\NewsController@index');
Route::get('posts/detail/{id}','App\Http\Controllers\NewsController@detail');
Route::get('motels/detail/{id}','App\Http\Controllers\MotelController@detail');
Route::get('test',function (){
    return view('motelDetails');
});

//endFrontend

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//email
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware(['auth'])->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return view('verifyEmailSuccess');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('status', 'verification-link-sent');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('profile', function () {
    // Only verified users may enter...
})->middleware('verified');
//endemail
