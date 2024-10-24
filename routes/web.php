<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CategoryController::class, 'index']);
Route::get('/create_category', [CategoryController::class, 'create']);
Route::post('/category', [CategoryController::class, 'category']);
Route::post('/delete_category',[CategoryController::class,'destroy']);
Route::post('/show_category',[CategoryController::class,'show']);

Route::get('/post', [PostController::class, 'index']);
Route::get('/create_post', [PostController::class, 'create']);
Route::post('/post', [PostController::class, 'post']);
Route::post('/delete_post',[PostController::class,'destroy']);
Route::post('/show_post',[PostController::class,'show']);

Route::get('/comment', [CommentController::class, 'index']);
Route::get('/create_comment', [CommentController::class, 'create']);
Route::post('/comment', [CommentController::class, 'comment']);
Route::post('/delete_comment',[CommentController::class,'destroy']);
Route::post('/show_comment',[CommentController::class,'show']);

Route::get('/like', [LikeController::class, 'index']);
Route::get('/create_like', [LikeController::class, 'create']);
Route::post('/like', [LikeController::class, 'like']);
Route::post('/delete_like',[LikeController::class,'destroy']);
Route::post('/show_like',[LikeController::class,'show']);

Route::get('/product', [ProductController::class, 'index']);
Route::get('/create_product', [ProductController::class, 'create']);
Route::post('/product', [ProductController::class, 'product']);
Route::post('/delete_product',[ProductController::class,'destroy']);
Route::post('/show_product',[ProductController::class,'show']);

Route::get('/order', [OrderController::class, 'index']);
Route::get('/create_order', [OrderController::class, 'create']);
Route::post('/order', [OrderController::class, 'order']);
Route::post('/delete_order',[OrderController::class,'destroy']);
Route::post('/show_order',[OrderController::class,'show']);
