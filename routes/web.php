<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
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

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/posts/{id}', [PostController::class, 'show'])->where('post' , '[A-z_\-\.]+');


Route::get('/categories/{id}', function (Category $id) {
    return view('posts' , [
        'posts' => $id->posts,
        'currentCategory' => $id,
        'categories' => Category::all()
    ]);
})->name('category');


Route::get('/authors/{author:username}', function (User $author) {
    return view('posts' , [
        'posts' => $author->post,
        'categories' => Category::all()
    ]);
});
