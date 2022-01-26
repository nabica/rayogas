<?php

namespace App\Http\Controllers\Rayogas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog\BlogBanner;
use App\Models\Blog\BlogPost;

class BlogController extends Controller
{
    public function index()
    {
        $blogBanner = BlogBanner::first();
        $blogPosts = BlogPost::latest('id')->paginate(6);
        return view('rayogas.blog-list', compact('blogBanner', 'blogPosts'));
    }

    public function show($slug)
    {
        $blogPost = BlogPost::where('slug', $slug)->first();
        return view('rayogas.blog', compact('blogPost'));
    }
}
