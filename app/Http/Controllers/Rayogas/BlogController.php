<?php

namespace App\Http\Controllers\Rayogas;

use App\Http\Controllers\Controller;
use App\Models\Blog\Blog;
use Illuminate\Http\Request;
use App\Models\Blog\BlogBanner;
use App\Models\Blog\BlogPost;

class BlogController extends Controller
{
    public function index()
    {
        $blogs =  Blog::latest('id')->paginate(6);
        return view('rayogas.blogs', compact('blogs'));
    }
}
