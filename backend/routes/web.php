<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

// 記事一覧
Route::get('/', 'ArticleController@index');

// 認証関連
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
