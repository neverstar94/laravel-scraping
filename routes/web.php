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
use App\Http\Controllers\SiteinfoController;
Route::get('/', function () {
     return view('index');
})->name('index');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/ourapp', function () {
    return view('ourapp');
})->name('ourapp');
Route::get('/download', function () {
    return view('download');
})->name('download');
Route::get('/sitelist', function () {
    return view('sitelist');
})->name('sitelist');
Route::post('/createsiteinfo',[SiteinfoController::class,'createsiteinfo']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
