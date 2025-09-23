<?php

namespace App\Http\Controllers\Rayogas;

use App\Http\Controllers\Controller;
use App\Models\Blog\Blog;
use Illuminate\Http\Request;
use App\Models\Blog\BlogBanner;
use App\Models\Blog\BlogPost;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use App\Mail\BlogContactMail;
use App\Http\Requests\Rayogas\BlogContactRequest;

class BlogController extends Controller
{
    public $linkForm;
    public $dataid;

    public function __construct()
    {
        $this->linkForm = Config::get('rayogas.form.form_link');
        $this->dataid = Config::get('rayogas.form.data_id');
    }
    public function index()
    {
        $blogs = Blog::latest('id')->paginate(9);
        $linkForm = $this->linkForm;
        $dataid = $this->dataid;
        return view('rayogas.blogs', compact('blogs', 'linkForm', 'dataid'));
    }
    public function show($slug)
    {
        $blogPost = BlogPost::where('slug', $slug)->first();
        return view('rayogas.blog', compact('blogPost'));
    }

}
