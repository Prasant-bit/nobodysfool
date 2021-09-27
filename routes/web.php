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

//group middleware vaneko chai hamile particular page lai route garna sakinxa, jun pagelai garne ho tyo vitra rakhne tala ko function banayera. protectedPage chai hamile banako function ho authorize middleware ko vitra

Route::group(['middleware'=>['protectedPage']], function(){
    Route::get('/about', function(){
        return view('about');
    });

});

Route::view('home','home')->middleware('protected');