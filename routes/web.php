<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userscontroller;
use App\Http\Controllers\logincontroller;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user', function(){
    return view('user');
});

Route::get('/about', function(){
    return view('about');
});

Route::post('/form', function(){
    return view('form');
});

Route::get('todo',[userscontroller::class, 'overload'] );

Route::post('login', [logincontroller::class, "login"]);
Route::view('users', 'userdata');
Route::view('noaccess','noaccess');