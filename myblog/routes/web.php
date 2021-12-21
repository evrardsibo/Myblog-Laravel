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
Route::get('/articles{article:slug}',[MainController::class , 'show'])->name('article');

Auth::routes();

Route::prefix('/admin')->middleware('admin')->group(function()
{
    Route::get('/articles',[ArticleController::class,'index'])->name('admin');
    Route::get('/articles/create',[ArticleController::class,'create'])->name('create');
    Route::post('/articles/store',[ArticleController::class,'store'])->name('adminstore');
    Route::delete('/article/delete',[ArticleController::class,'delete'])->name('delete');
    Route::get('/article/{article}/edit',[ArticleController::class, 'edit'])->name('edit');
    Route::put('/article/{article}/update',[ArticleController::class,'update'])->name('update');

        //pour ne pas avoir a precise tous le methode
    // Route::resource('articles',[ArticleController::class])->except([
    //     sauf si on n'a pas utlise le meme methode 
    // ])

});




