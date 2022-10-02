<?php
use App\Http\Controllers\PageController;
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

Route::get('/anasayfa',[PageController::class,'read']);
Route::get('/',[PageController::class,'login']);
Route::get('/konuekle',[PageController::class,'konu']);
Route::post('/kekle',[PageController::class,'konuekle']);
Route::post('/giris',[PageController::class,'giris']);
Route::fallback(function(){//Girilen Url yoksa yapılacak işlem
    return "Yanlış Adres knk";
});
