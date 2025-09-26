<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function shown(Blog $blog)
    {
        $blog->load('user_id', 'category_id');
        return view('blogs.show', [
            'blog' => $blog
        ]);
    }
}
