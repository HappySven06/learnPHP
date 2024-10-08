<?php

use App\Controllers\PostsController;
use App\Controllers\PublicController;
use App\Route;

Route::get('/', [PublicController::class, 'index']);

Route::get('/us', [PublicController::class, 'us']);
Route::get('/form', [PublicController::class, 'form']);
Route::post('/answer', [PublicController::class, 'answer']);
Route::get('/admin/posts', [PostsController::class, 'index']);
Route::get('/admin/posts/create', [PostsController::class, 'create']);
Route::get('/admin/posts/view', [PostsController::class, 'view']);
Route::post('/admin/posts', [PostsController::class, 'store']);