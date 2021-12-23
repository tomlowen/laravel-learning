<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use \App\Models\Post;

class PostsController extends Controller
{
    public function show($slug)
    {
        // $post = Post::where('slug', $slug)->firstOrFail();
        // $post = DB::table('posts')->where('slug', $slug)->first();

        return view('test', ["name" => Post::where('slug', $slug)->firstOrFail()]);
    }
}
