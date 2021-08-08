<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;

use function PHPUnit\Framework\fileExists;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PostController::class , 'index'])->name('home');
Route::get('/posts/{id}', [PostController::class , 'show'])->where('post' , '[A-z_\-\.]+');

Route::get('/categories/{id}', [CategoryController::class , 'getCategory'])->name('category');
Route::get('/authors/{author:username}', [CategoryController::class , 'getAuthor']);

Route::get('register' , [RegisterController::class , 'create'])->middleware('guest');
Route::post('register' , [RegisterController::class , 'store'])->middleware('guest');

Route::get('login' , [SessionController::class , 'create'])->middleware('guest');
Route::post('sessions' , [SessionController::class , 'store'])->middleware('guest');
Route::post('logout' , [SessionController::class , 'destroy'])->middleware('auth');