<?php

use App\Http\Controllers\eventController;
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
use App\Http\Controllers\RegisController;
use App\Http\Controllers\SessionController;

Route::get('/upload',[WebController::class, 'ViewUpload'])->middleware('auth');
Route::get('/login',[WebController::class, 'ViewLogin'])->name('login')->middleware('guest');
Route::get('/TentangKami',[WebController::class, 'TentangKami']);
Route::get('/Syarat',[WebController::class, 'Syarat']);
Route::get('/HubungiKami',[WebController::class, 'HubungiKami']);
Route::get('/Kebijakan',[WebController::class, 'Kebijakan']);
Route::get('/Bantuan',[WebController::class, 'Bantuan']);
Route::get('/registrasi',[WebController::class, 'ViewRegistrasi'])->middleware('guest');
Route::post('/proses-regis',[RegisController::class,'prosesRegis']);
Route::post('/login',[RegisController::class,'authenticate']);

Route::get('/index',[eventController::class, 'index']);
Route::get('/buat-session',[SessionController::class, 'buatSession']);
Route::get('/hapus-session',[SessionController::class, 'hapusSession']);
Route::post('/logout',[RegisController::class, 'logout']);

Route::get('/search',[eventController::class, 'search']);
Route::get('/', function () {
    return view('welcome');
});

Route::resource('events',eventController::class);

Route::post('/events/{event}',[eventController::class,'update']);
Route::get('/show-events/{event}',[eventController::class, 'show']);



Route::resource('/akun',RegisController::class)->middleware('auth');

Route::get('/event-saya/{email}',[eventController::class,'myEvents'])->middleware('auth');



