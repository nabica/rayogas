<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Blog\BlogPostRequest;
use App\Models\Blog\BlogPost;
use App\Services\Util\FileService;
use Config;

class BlogPostController extends Controller
{
    private $mainFolder;
    private $inputFiles;

    public function __construct()
    {
        $this->mainFolder = Config::get('rayogas.blog.posts');
        $this->inputFiles = ['thumb_image', 'image'];
    }

    public function index()
    {
        $posts = BlogPost::latest('id')->paginate(6);
        return view('admin.sections.blog.posts.index', compact('posts'));
    }

    public function create()
    {
        $post = new BlogPost;
        return view('admin.sections.blog.posts.create', compact('post'));
    }

    public function store(BlogPostRequest $request)
    {
        $post = BlogPost::create($request->except($this->inputFiles));

        //Save Files
        $fileService = new FileService();
        $fileService->saveFiles($request, $this->inputFiles, $this->mainFolder, $post);

        return redirect()->route('admin.blog.posts.index')->withSuccess('Se ha creado el artículo ' . $post->title . '.');
    }

    public function edit($id)
    {
        $post = BlogPost::findOrFail($id);
        return view('admin.sections.blog.posts.edit', compact('post'));
    }

    public function update(BlogPostRequest $request, $id)
    {
        $post = BlogPost::findOrFail($id);

        //Update record
        $post->update($request->except($this->inputFiles));

        //Save Files
        $fileService = new FileService();
        $fileService->saveFiles($request, $this->inputFiles, $this->mainFolder, $post);

        return redirect()->route('admin.blog.posts.edit', $post->id)->withSuccess('Se ha actualizado el artículo satisfactoriamente.');
    }

    public function destroy($id)
    {
        $post = BlogPost::findOrFail($id);
        $title = $post->title;
        $fileService = new FileService();
        $path = $this->mainFolder . '/'. $post->getFolderId();
        $fileService->deleteDirectory($path);
        $post->delete();

        return redirect()->route('admin.blog.posts.index')->withSuccess('El artículo ' . $title . ' ha sido eliminado satisfactoriamente.');
    }
}
