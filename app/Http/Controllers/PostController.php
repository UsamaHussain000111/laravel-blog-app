<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $posts = Post::latest();

        return view('posts.index' , [

            'posts' => Post::latest()->filter(request(['search' , 'category']))->get(),
            'categories' => Category::all()
        ]);
    }

    public function show($id){

        return view('posts.show' , ['post' => Post::find($id)]);
    }
}
