<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/posts', [\App\Http\Controllers\PostsController::class, 'index'])->name('posts.index');
Route::get('/posts/create-post', [\App\Http\Controllers\PostsController::class, 'create'])->name('posts.create');
Route::post('/posts/store-post', [\App\Http\Controllers\PostsController::class, 'store'])->name('posts.store');
