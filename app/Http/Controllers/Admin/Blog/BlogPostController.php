<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Blog\BlogPostRequest;
use App\Models\Blog\Blog;
use App\Services\Util\FileService;
use Illuminate\Http\Request;
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
        return view('admin.sections.blog.blogs.create',compact('blog', 'api'));
    }

    private function saveImagesFromContent($content, $folderId = null)
    {
        $folder = $folderId ? 'uploads/blog_posts/' . $folderId : 'uploads/blog_posts';
        if (!file_exists(public_path($folder))) {
            mkdir(public_path($folder), 0777, true);
        }
        
        $content = preg_replace_callback(
            '/<img[^>]+src="data:image\/([^;]+);base64,([^"]+)"[^>]*>/i',
            function ($matches) use ($folder) {
                $ext = $matches[1];
                $data = base64_decode($matches[2]);
                $filename = uniqid() . '.' . $ext;
                $path = $folder . '/' . $filename;
                file_put_contents(public_path($path), $data);
                return preg_replace(
                    '/src="[^"]+"/',
                    'src="/' . $path . '"',
                    $matches[0]
                );
            },
            $content
        );
     
        $content = preg_replace(
            '/src="(?:\.\.\/)+uploads\/blog_posts\/([^"]+)"/i',
            'src="/uploads/blog_posts/$1"',
            $content
        );
        return $content;
    }

    public function store(BlogPostRequest $request)
    {
        $data = $request->only(['title', 'body_blog']);

        $blog = Blog::create([
            'title' => $data['title'],
            'body_blog' => '', 
        ]);

        if (isset($data['body_blog'])) {
            $data['body_blog'] = $this->saveImagesFromContent($data['body_blog'], $blog->getFolderId());
        }

        $blog->update(['body_blog' => $data['body_blog']]);

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
            $data['body_blog'] = $this->saveImagesFromContent($data['body_blog'], $blog->getFolderId());
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

    public function uploadImage(Request $request)
    {
        if (!$request->hasFile('file')) {
            return response()->json(['error' => 'No file uploaded'], 400);
        }

        $file = $request->file('file');
        $allowed = ['jpg', 'jpeg', 'png', 'gif', 'webp'];
        $ext = strtolower($file->getClientOriginalExtension());

        if (!in_array($ext, $allowed)) {
            return response()->json(['error' => 'Tipo de archivo no permitido'], 400);
        }

        $name = uniqid() . '.' . $ext;
        $path = 'uploads/blog_posts/tmp/' . $name;
        $file->move(public_path('uploads/blog_posts/tmp'), $name);

        return response()->json(['location' => '/' . $path]);
    }
}
