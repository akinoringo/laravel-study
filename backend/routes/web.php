<?php

use Illuminate\Support\Facades\Route;

// 記事一覧
Route::get('/', 'ArticleController@index');
