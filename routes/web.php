<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::name('home')
    ->get('/', function () {
        return view('pages.home');
    });

Route::name('articles-list')
    ->get('/articles', function () {
        return view('pages.articles-list');
    });

Route::name('articles.show')
    ->get('articles/{slug}', [ArticleController::class, 'show']);
