<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use PharIo\Manifest\Author;


class AuthorController extends Controller
{
    public function index()
    {

        $posts = Author::get();
        return view('authors', [
            "title" => 'Post Categories',
            "active" => 'categories',
            "authors" => $posts
        ]);
    }

    public function show()
    {
        $posts = Post::where('author')->paginate(7);
        return view('author', [
            'title' => "Post By Author : $posts->author",
            'active' => 'authors',
            'posts' => $posts,
        ]);
    }
}
