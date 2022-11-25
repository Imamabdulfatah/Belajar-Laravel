<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use PhpParser\Node\Stmt\If_;

// controller install dengan command pallet
// https://laravel.com/docs/9.x/controllers#main-content
class PostController extends Controller
{
    public function index()
    {
        // dd(request('search'))
        // untuk pencarian search di Post.php/model

        // untuk menyesuaikan judul
        $title = '';
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }


        return view('posts', [
            "title" => "All Posts" . $title,
            "active" => 'posts',
            // filter dari search
            // mengambil filter array di model
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    // rote diikat dengan modelnya
    public function show(Post $post) 
    {
        return view('post', [
            "title" => "Single Post",
            "active" => "posts",
            // "post" => Post::find($id)
            "post" => $post
        ]);
    }
}
