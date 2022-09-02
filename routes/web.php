<?php

use App\Http\Controllers\Web\AuthControlller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthControlller::class, 'login']);
Route::post('/login', [AuthControlller::class, 'postLogin']);
Route::get('/register', [AuthControlller::class, 'register']);
Route::post('/register', [AuthControlller::class, 'postRegister']);
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', function () {
        return view('home');
    });
});
