<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostEditController extends Controller
{
    public function edit(Post $post)
    {
        // $post->vzt()->increment();
        $categories_child = Category::with('childrenRecursive')
            ->where('parent_id', null)
            ->get();
            
        return view('admin.posts.edit', compact('categories_child','post'));
    }
}
