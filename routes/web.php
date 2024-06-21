<?php

use Illuminate\Foundation\Console\UpCommand;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'App\Http\Controllers\Post'], function() {
    Route::get('/posts', 'IndexController')->name('posts.index');
    Route::get('/posts/create', 'CreateController')->name('posts.create');
    Route::post('/posts/store', 'StoreController')->name('posts.store');
    Route::get('/posts/{post}', 'ShowController')->name('posts.show');
    Route::get('/posts/{post}/edit', 'EditController')->name('posts.edit');
    Route::patch('/posts/{post}', 'UpdateController')->name('posts.update');
    Route::delete('/posts/{post}', 'DestroyController')->name('posts.destroy');
});

Route::group(['namespace' => 'App\Http\Controllers\Comment'], function() {
    Route::get('/comments', 'IndexController')->name('comments.index');
    Route::get('/comments/create', 'CreateController')->name('comments.create');
    Route::post('/comments/store', 'StoreController')->name('comments.store');
    Route::get('comments/{comment}', 'ShowController')->name('comments.show');
    Route::get('comments/{comment}/edit', 'EditController')->name('comments.edit');
    Route::patch('/comments/{comment}', 'UpdateController')->name('comments.update');
    Route::delete('/comments/{comment}', 'DestroyController')->name('comments.destroy');
});