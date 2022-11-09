<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostDeleteController extends Controller
{
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('admin.post.list');
    }
}
