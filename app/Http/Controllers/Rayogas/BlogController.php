<?php

namespace App\Http\Controllers\Rayogas;

use App\Http\Controllers\Controller;
use App\Models\Blog\Blog;


class BlogController extends Controller
{
    protected $blogfolder;

    public function __construct()
    {
        $this->blogfolder = config('rayogas.blog.posts');
    }

    public function index()
    {
        $blogs = Blog::latest('id')->paginate(9);
        $blogfolder = $this->blogfolder;
        return view('rayogas.blogs', compact('blogs', 'blogfolder'));
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        $date = $blog->created_at->locale('es')->isoFormat('DD [de] MMMM [de] YYYY');
        $body_blog = $blog->body_blog;
        $next_blogs = Blog::where('id', '!=', $id)->latest('id')->take(3)->get();
        $blogfolder = $this->blogfolder;
        return view('rayogas.blogs-detail', compact('blog', 'date', 'next_blogs', 'body_blog', 'blogfolder'));
    }
}
