<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Mas Luck', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('/posts', ['title' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/posts/{post:slug}', function(Post $post){

    return view('/singlepost', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('/contact', ['nomorwa' => '085819003378', 'title' => 'Contact']);
});