<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }


    public function store(Request $request)
    {
        $post = Post::create([
            'user_id' => 0,
            'post_title' => $request->post_title,
            'post_content' => $request->problem_content,
            'comment' => $request->comment,
        ]);

        return redirect()->route('posts');
    }
}
