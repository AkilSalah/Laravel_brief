<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/aventure', function () {
    return view('singleAventure');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/utilisateur', function () {
    return view('utilisateur');
});

Route::post('/register',[UserController::class,'userRegister']);

Route::post('/login',[UserController::class,'login']);

Route::post('/',[UserController::class,'logout'])->name('logout') ;




