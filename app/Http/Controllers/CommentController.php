<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function store(Request $request, Post $post)
    {
        $attributes = $request->validate(['body' => 'required|max:140']);
    	Comment::create($request->all());
    	return redirect()->route('posts.show', ['course' => $post->course->id, 'post' => $post->id]);
    }

}
