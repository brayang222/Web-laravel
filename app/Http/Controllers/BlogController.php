<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class BlogController extends Controller
{
    public function show(Blog $blog)
    {
        $blog->load('user', 'category');
        return view('blogs.show', [
            'blog' => $blog
        ]);
    }

    public function index(Blog $blogs)
    {
        $blogs = Blog::with(['user', 'category'])->get();
        return view('blogs.index', [
            'blogs' => $blogs
        ]);
    }
}
