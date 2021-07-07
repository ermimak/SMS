<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\InformationsController;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();
Route::get('', [PagesController::class,'index']);
Route::resource('/product', PostsController::class);
Route::resource('/profile',ProfileController::class);

Route::resource('/add',InformationsController::class);


Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

