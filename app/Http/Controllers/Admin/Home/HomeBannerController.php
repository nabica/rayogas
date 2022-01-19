<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home\HomeBanner;
use App\Services\Util\FileService;
use Config;

class HomeBannerController extends Controller
{
    private $mainFolder;
    private $inputFiles;

    public function __construct()
    {
        $this->mainFolder = Config::get('rayogas.home.banner');
        $this->inputFiles = ['image'];
    }

    public function edit($id)
    {
        $banner = HomeBanner::findOrFail($id);
        return view('admin.sections.home.banner.edit', compact('banner'));
    }

    public function update(Request $request, $id)
    {
        $banner = HomeBanner::findOrFail($id);

        //Update record
        $banner->update($request->except($this->inputFiles));

        //Save Files
        $fileService = new FileService();
        $fileService->saveFiles($request, $this->inputFiles, $this->mainFolder, $banner);

        return redirect()->route('admin.home.banner.edit', $banner->id)->withSuccess('Se ha actualizado el banner satisfactoriamente.');
    }
}
