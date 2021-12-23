<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($post)
    {
        $posts = [
            "post-1" => "This is the first post",
            "post-2" => "This is the second post",
        ];

        if (!array_key_exists($post, $posts)) {
            abort(404, "This page doesn't exist");
        }

        return view('test', ["name" => $posts[$post]]);
    }
}
