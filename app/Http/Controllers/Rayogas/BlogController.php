<?php

namespace App\Http\Controllers\Rayogas;

use App\Http\Controllers\Controller;
use App\Models\Blog\Blog;


class BlogController extends Controller
{
    public function index()
    {
        $blogs =  Blog::latest('id')->paginate(9);
        return view('rayogas.blogs', compact('blogs'));
    }
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        $date = $blog->created_at->locale('es')->isoFormat('DD [de] MMMM [de] YYYY');
        $body_blog = $blog->body_blog;
        $next_blogs = Blog::where('id', '!=', $id)->latest('id')->take(3)->get();
        return view('rayogas.blogs-detail', compact('blog', 'date', 'next_blogs', 'body_blog'));
    }
}
