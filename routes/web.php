<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticelController;

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
    return view('index');
});

Route::get('/home',[ArticelController::class,'index'])->name('index');
Route::get('/all',[ArticelController::class,'all'])->name('allArticels');
Route::get('/{articel}/show',[ArticelController::class,'show'])->name('singelArticle');
Route::get('/create',[ArticelController::class,'createForm'])->name('showcreateArticel');
Route::post('/create',[ArticelController::class,'create'])->name('createArticel');
