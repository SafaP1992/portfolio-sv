<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Media;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostUpdateController extends Controller
{
    public function update(Request $request, Post $post)
    {
        // if ($request->user()->can('post-create')) {
            if($file = $request->file('post_photo')){
                $s = Storage::disk('local')->put('public/Blogs', $file);
                $photo = new Media();
                $photo->name = $file->getClientOriginalName();
                $photo->path = $s;
                $photo->user_id = Auth::id();
                $photo->save();
                $post->photo_id = $photo->id;
            }

            $post->title = $request->input('title');
            $post->slug = $request->input('slug') ? Str::slug($request->input('slug'), '-') : Str::slug($request->input('title'), '-');
            $post->description = $request->input('description');
            $post->short_desc = $request->input('short_desc');
            $post->status = $request->input('status');
            $post->type = $request->input('type');
            $post->meta_description = $request->input('meta_description');
            $post->meta_title = $request->input('meta_title');
            $post->meta_keywords = $request->input('meta_keyword');
            $post->user_id = Auth::id();
            $post->save();
            // $post->categories()->sync($request->categories);
            Session::flash('add', 'مطلب با موفقیت ساخته شد');
            return redirect()->route('admin.post.list');
        // } else {
        //     return view('permission.index');
        // }
    }
}
