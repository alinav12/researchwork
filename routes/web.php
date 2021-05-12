<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth/login');
});
Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/newuser', function () {
    return view('auth/register');
});

Route::get('/newpost', function () {
    return view('newpost');
});

Route::post('/storenewuser', [App\Http\Controllers\NewUserController::class, 'registerUser']);

Route::post('/storenewpost', [App\Http\Controllers\NewPostController::class, 'makeNewPost']);




Auth::routes();

Route::get('/telegram', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




