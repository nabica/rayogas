<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Blog\BlogPostRequest;
use App\Models\Blog\Blog;
use App\Services\Util\FileService;
use Illuminate\Support\Facades\Config;

class BlogPostController extends Controller
{
    private $mainFolder;
    private $inputFiles;

    public function __construct()
    {
        $this->mainFolder = Config::get('rayogas.blog.posts');
        $this->inputFiles = ['card_image'];
    }

    public function index()
    {
        $blogs = Blog::latest('id')->paginate(6);
        return view('admin.sections.blog.blogs.index', compact('blogs'));
    }

    public function create()
    {
        $blog = new Blog();
        return view('admin.sections.blog.blogs.create', compact('blog'));
    }
    public function store(BlogPostRequest $request)
    {
        $blog = Blog::create($request->except($this->inputFiles));

        //Save Files
        $fileService = new FileService();
        $fileService->saveFiles($request, $this->inputFiles, $this->mainFolder, $blog);

        return redirect()->route('admin.blog.posts.index')->withSuccess('Se ha creado el artículo ' . $blog->title . '.');
    }
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.sections.blog.blogs.edit', compact('blog'));
    }

    public function update(BlogPostRequest $request, $id)
    {
        $blog = Blog::findOrFail($id);

        //Update record
        $blog->update($request->except($this->inputFiles));

        //Save Files
        $fileService = new FileService();
        $fileService->saveFiles($request, $this->inputFiles, $this->mainFolder, $blog);

        return redirect()->route('admin.blog.posts.edit', $blog->id)->withSuccess('Se ha actualizado el artículo satisfactoriamente.');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $title = $blog->title;
        $fileService = new FileService();
        $path = $this->mainFolder . '/' . $blog->getFolderId();
        $fileService->deleteDirectory($path);
        $blog->delete();

        return redirect()->route('admin.blog.posts.index')->withSuccess('El artículo ' . $title . ' ha sido eliminado satisfactoriamente.');
    }
}
