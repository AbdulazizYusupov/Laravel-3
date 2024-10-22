<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/',[CategoryController::class,'index']);
Route::get('/post',[PostController::class,'index']);
Route::get('/comment',[CommentController::class,'index']);
Route::get('/like',[LikeController::class,'index']);
Route::get('/product',[ProductController::class,'index']);
Route::get('/order',[OrderController::class,'index']);
