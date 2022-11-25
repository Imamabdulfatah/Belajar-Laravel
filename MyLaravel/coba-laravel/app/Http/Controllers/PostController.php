<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
// controller install dengan command pallet
// https://laravel.com/docs/9.x/controllers#main-content
class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "All Posts",

             // aktif bauat navbar
             "active" => 'posts',
            // Post dari use diatas
            // latest agar data fatories terbaru yang diambil

            // with([]) ini agar query yang diambil lebih sedikit teknik n+1 problem
            // teknik eager loading laravel
            "posts" => Post::latest()->get()
        ]);
    }

    // rote diikat dengan modelnya
    public function show(Post $post) 
    {
        return view('post', [
            "title" => "Single Post",
            "active" => 'posts',
            // "post" => Post::find($id)
            "post" => $post
        ]);
    }
}
