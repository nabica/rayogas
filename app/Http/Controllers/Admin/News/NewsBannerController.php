<?php

namespace App\Http\Controllers\Admin\News;

use App\Models\News\NewBanner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Util\FileService;
class NewsBannerController extends Controller
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
        $banner = NewBanner::findOrFail($id);
        return view('admin.sections.news.banner.edit', compact('banner'));
    }

    public function update(Request $request, $id)
    {
        $banner = NewBanner::findOrFail($id);

        //Update record
        $banner->update($request->except($this->inputFiles));

        //Save Files
        $fileService = new FileService();
        $fileService->saveFiles($request, $this->inputFiles, $this->mainFolder, $banner);

        return redirect()->route('admin.blog.banner.edit', $banner->id)->withSuccess('Se ha actualizado el banner satisfactoriamente.');
    }
}
