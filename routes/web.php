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
use App\Http\Controllers\WebController;

Route::get('/beranda',[WebController::class, 'ViewBeranda']);
Route::get('/upload',[WebController::class, 'ViewUpload']);
Route::get('/login',[WebController::class, 'ViewLogin']);
Route::get('/halamanEvent',[WebController::class, 'ViewHalamanEvent']);
Route::get('/registrasi',[WebController::class, 'ViewRegistrasi']);

Route::get('/', function () {
    return view('welcome');
});


