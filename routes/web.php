<?php

use App\Http\Controllers\aventuresController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\ValidateDataMidleware;
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

// -----------------------------------------------------------
Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/utilisateur', function () {
    return view('utilisateur');
})->name('utilisateur');
// ---------------------------------------------------------------------

// ----------------------------------------------------------------------
Route::post('/register',[UserController::class,'userRegister']);

Route::middleware(['ValidateDataMidleware'])->group( function(){
    Route::post('/login',[UserController::class,'login'])->name('login');
});


Route::post('/',[UserController::class,'logout'])->name('logout') ;

// --------------------------------------------------------------------------
// -------------------------------------------------------------------------------------------
Route::middleware(['auth'])->group( function(){

Route::post('/utilisateur', [aventuresController::class, 'addAventure'])->name('utilisateur');
Route::get('/utilisateur', [aventuresController::class, 'afficherAventuresUser'])->name('aventures.utilisateur');

});

// -------------------------------------------------------------------------------------------


Route::get('/', [aventuresController::class, 'afficherAll']);

// -------------------------------------------------------------------------------------------

Route::get('/filterDesc', [aventuresController::class, 'afficherAll'])->name('desc');
Route::get('/filterAsc', [aventuresController::class, 'afficherAll'])->name('asc');
Route::get('/destination', [aventuresController::class, 'afficherAll'])->name('destination');


// -------------------------------------------------------------------------------------------




Route::get('/aventure', [aventuresController::class, 'singleAventure']);



