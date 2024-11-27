<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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
    return view('login');
});

Route::get('/register/',[RegisterController::class,'register']);
Route::post('/register/',[RegisterController::class,'register_post']);

Route::post('/login',[LoginController::class,'signin']);
Route::get('/logout',[LoginController::class,'logout']);


Route::prefix('/user/')->group(function(){
    Route::get('list/',[UserController::class,'index'])->name('user.list');
    Route::get('create/',[UserController::class,'create']);
    Route::post('store_normally/',[UserController::class,'store_normally'])->name('user.store_normally');
    Route::post('store/',[UserController::class,'store'])->name('user.store');
    Route::get('edit/{id}',[UserController::class,'edit']);
    Route::post('update/{id}',[UserController::class,'update']);
    Route::get('delete/{id}',[UserController::class,'delete']);
    Route::get('destroy',[UserController::class,'destroy'])->name('user.destroy');
    Route::get('{id}',[UserController::class,'show']);
    Route::post('ajax/post',[UserController::class,'ajaxCall'])->name('ajax.post');
});
