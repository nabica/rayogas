<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
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
        $api = Config::get('rayogas.api.key');
        $blog = new Blog();
        return view('admin.sections.blog.blogs.create', compact('blog', 'api'));
    }

    private function saveImagesFromContent($content)
    {
        return preg_replace_callback(
            '/<img[^>]+src="data:image\/([^;]+);base64,([^"]+)"[^>]*>/i',
            function ($matches) {
                $ext = $matches[1];
                $data = base64_decode($matches[2]);
                $filename = uniqid() . '.' . $ext;
                $path = 'uploads/blog_posts/' . $filename;
                file_put_contents(public_path($path), $data);
                // Reemplaza solo el src, mantiene el resto del tag
                return preg_replace(
                    '/src="[^"]+"/',
                    'src="/' . $path . '"',
                    $matches[0]
                );
            },
            $content
        );
    }

    public function store(BlogPostRequest $request)
    {
        $data = $request->except($this->inputFiles);

        if (isset($data['body_blog'])) {
            $data['body_blog'] = $this->saveImagesFromContent($data['body_blog']);
        }

        $blog = Blog::create($data);

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
        $data = $request->except($this->inputFiles);

        if (isset($data['body_blog'])) {
            $data['body_blog'] = $this->saveImagesFromContent($data['body_blog']);
        }

        $blog->update($data);

        $fileService = new FileService();
        $fileService->saveFiles($request, $this->inputFiles, $this->mainFolder, $blog);

        return redirect()->route('admin.blog.posts.index', $blog->id)->withSuccess('Se ha actualizado el artículo satisfactoriamente.');
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
