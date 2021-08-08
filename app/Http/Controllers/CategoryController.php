<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategory(Category $id)
    {
        return view('posts.index' , [
            'posts' => $id->posts,
            'currentCategory' => $id,
            'categories' => Category::all()
        ]);
    }

    public function getAuthor(User $author)
    {
        return view('posts.index' , [
            'posts' => $author->post,
            'categories' => Category::all()
        ]);
    }
}
