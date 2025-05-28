<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Blog\BlogPostRequest;
use App\Models\Blog\Blog;
use App\Services\Util\FileService;
use Illuminate\Support\Facades\Config;
use App\Services\HtmlSanitizerService;

class BlogPostController extends Controller
{
    private $mainFolder;
    private $inputFiles;

    private $htmlSanitizer; // Agregar propiedad

    public function __construct(HtmlSanitizerService $htmlSanitizer) // Inyectar servicio
    {
        $this->mainFolder = Config::get('rayogas.blog.posts');
        $this->inputFiles = ['card_image'];
        $this->htmlSanitizer = $htmlSanitizer; // Asignar servicio
    }

    public function index()
    {
        $blogs = Blog::latest('id')->paginate(6);
        return view('admin.sections.blog.blogs.index', compact('blogs'));
    }

    public function create()
    {
        $api = Config::get('rayogas.api.key');
        $blog = new Blog();
        return view('admin.sections.blog.blogs.create', compact('blog', 'api'));
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
        $api = Config::get('rayogas.api.key');
        $blog = Blog::findOrFail($id);
        return view('admin.sections.blog.blogs.edit', compact('blog', 'api'));
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
