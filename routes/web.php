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
    return view('auth.login');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/modelo1', [App\Http\Controllers\HomeController::class, 'modelo1'])->name('modelo1');
Route::post('/modelo2', [App\Http\Controllers\HomeController::class, 'modelo2'])->name('modelo2');
Route::post('/fileupload', [App\Http\Controllers\HomeController::class, 'fileupload'])->name('fileupload');

//Route::get('/zeladoria', [App\Http\Controllers\ZeladoriaController::class, 'index'])->name('zeladoria.index');
//
