<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use Illuminate\Foundation\Console\UpCommand;

Route::get('/', function () {
    return view('welcome');
});

Route::resources([
    'categories' => CategoryController::class,
    'comments' => CommentController::class,
    'posts' => PostController::class,
    'profiles' => ProfileController::class,
    'roles' => RoleController::class,
    'tags' => TagController::class,
]);
