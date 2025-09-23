<?php

namespace App\Http\Controllers\Rayogas;

use App\Http\Controllers\Controller;
use App\Models\Blog\Blog;
use Illuminate\Support\Facades\Config;


class BlogController extends Controller
{
    protected $blogfolder;
    public $linkForm;
    public $dataid;

    public function __construct()
    {
        $this->blogfolder = config('rayogas.blog.posts');
        $this->linkForm = Config::get('rayogas.form.form_link');
        $this->dataid = Config::get('rayogas.form.data_id');
    }

    public function index()
    {
        $blogs = Blog::latest('id')->paginate(9);
        $blogfolder = $this->blogfolder;
        $linkForm = $this->linkForm;
        $dataid = $this->dataid;
        return view('rayogas.blogs', compact('blogs', 'blogfolder','dataid','linkForm'));
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $date = $blog->created_at->locale('es')->isoFormat('DD [de] MMMM [de] YYYY');
        $body_blog = $blog->body_blog;
        $next_blogs = Blog::where('id', '!=', $blog->id)->latest('id')->take(3)->get();
        $blogfolder = $this->blogfolder;
        return view('rayogas.blogs-detail', compact('blog', 'date', 'next_blogs', 'body_blog', 'blogfolder'));
    }
}
