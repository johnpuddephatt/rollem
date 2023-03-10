<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public static function show(Post $post)
    {
        $related_posts = \App\Models\Post::latest()
            ->where("id", "!=", $post->id)
            ->take(6)
            ->get()
            ->shuffle()
            ->take(3);

        return view("post.show", compact("post", "related_posts"));
    }
}
