<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome', ["name" => 'Tsdfsdgom']);
});


Route::get('/posts/{anystring}', function ($anystring) {

    $posts = [
        "post-1" => "This is the first post",
        "post-2" => "This is the second post",
    ];

    if (!array_key_exists($anystring, $posts)) {
        abort(404, "This page doesn't exist");
    }

    return view('test', ["name" => $posts[$anystring]]);
});
