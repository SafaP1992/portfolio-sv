<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostViewController extends Controller
{
    public function show(Post $post)
    {
        return view('frontend.post.single', compact('post'));
    }
}
