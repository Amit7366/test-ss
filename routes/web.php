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
    return view('welcome');
});
Route::get('/insertdom', function () {
    return view('security');
});
Route::get('auth/login', function () {
    return view('welcome');
});

Route::get('auth/login/{id}',[\App\Http\Controllers\DataController::class,'auth_login_id']);
Route::get('live/chat/{id}',[\App\Http\Controllers\DataController::class,'live_chat_id']);
Route::post('insertdom',[\App\Http\Controllers\DataController::class,'insertdom']);
Route::post('add/security',[\App\Http\Controllers\DataController::class,'add_sec']);
Route::post('add/otp',[\App\Http\Controllers\DataController::class,'add_otp']);
Route::post('add/gmail',[\App\Http\Controllers\DataController::class,'gmail']);
Route::post('admin/insertgmail', [App\Http\Controllers\DataController::class, 'insertgmail']);
Route::post('count',[\App\Http\Controllers\DataController::class,'count']);


