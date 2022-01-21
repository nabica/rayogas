<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog\BlogBanner;
use App\Services\Util\FileService;
use Config;

class BlogBannerController extends Controller
{
    private $mainFolder;
    private $inputFiles;

    public function __construct()
    {
        $this->mainFolder = Config::get('rayogas.blog.banner');
        $this->inputFiles = ['image'];
    }

    public function edit($id)
    {
        $banner = BlogBanner::findOrFail($id);
        return view('admin.sections.blog.banner.edit', compact('banner'));
    }

    public function update(Request $request, $id)
    {
        $banner = BlogBanner::findOrFail($id);

        //Update record
        $banner->update($request->except($this->inputFiles));

        //Save Files
        $fileService = new FileService();
        $fileService->saveFiles($request, $this->inputFiles, $this->mainFolder, $banner);

        return redirect()->route('admin.blog.banner.edit', $banner->id)->withSuccess('Se ha actualizado el banner satisfactoriamente.');
    }
}
