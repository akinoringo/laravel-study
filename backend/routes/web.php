<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

// ArticleControllerのルーティング
Route::get('/', 'ArticleController@index')->name('articles.index');
Route::resource('/articles', 'ArticleController')->except('index', 'show')->middleware('auth');
Route::resource('/articles', 'ArticleController')->only(['show']);

// 認証関連
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
