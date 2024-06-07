<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    
    public function blog()
    {   
        // $posts = Post::get(); -> return all
        // $post = Post::first(); -> return the first register
        // $post = Post::find(25); -> find and return by id number 25

        // dd($post);

        // $posts = Post::latest()->paginate();
        $posts = Post::orderBy('id', 'asc')->paginate(15);

        return view('blog', ['posts' => $posts]);
    }

    public function post(Post $post)
    {
        return view('post', ['post' => $post]);
    }
}
