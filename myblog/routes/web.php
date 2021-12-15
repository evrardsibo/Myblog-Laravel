<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class,'home'])->name('home');

Route::get('/articles',[MainController::class, 'index'])->name('articles');
Route::get('/articles{slug}',[MainController::class , 'show'])->name('article');

Auth::routes();

Route::get('/admin/articles',[ArticleController::class,'index'])->name('admin')->middleware('admin');
Route::get('/admin/articles/create',[ArticleController::class,'create'])->name('create')->middleware('admin');
Route::post('/admin/articles/store',[ArticleController::class,'store'])->name('adminstore')->middleware('admin');


