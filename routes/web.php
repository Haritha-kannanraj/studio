<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CreateEventController;
use App\Http\Controllers\DetailController;

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
  Session::forget('user');
  return redirect('login');
});

Route::post("/login",[UserController::class,'login']);
Route::get("/loginp",[UserController::class,'loginp']);
Route::view("/signup",'signup');
Route::post("/signup",[UserController::class,'signup']);
Route::get("/back",[UserController::class,'back']);
Route::get("/createEvent",[CreateEventController::class,'CreateEvent']);
Route::view("/",'index');
Route::view("Event",'Events');
Route::post('/store', [CreateEventController::class,'store']);
Route::view('imgupload','CreateEvent');
Route::get('detailss',[DetailController::class,'index']);
//Route::view('details','details');
Route::view('/accept','accept');
Route::get('acce/{id}', [DetailController::class, 'edit']);
Route::get('/onc/{ename}', [DetailController::class, 'accept']);
Route::post('/onc/{ename}', [DetailController::class, 'accept']);
Route::post('/accept', [DetailController::class,'store']);
