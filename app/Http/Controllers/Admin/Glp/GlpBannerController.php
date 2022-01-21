<?php

namespace App\Http\Controllers\Admin\Glp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Glp\GlpBanner;
use App\Services\Util\FileService;
use Config;

class GlpBannerController extends Controller
{
    private $mainFolder;
    private $inputFiles;

    public function __construct()
    {
        $this->mainFolder = Config::get('rayogas.glp.banner');
        $this->inputFiles = ['image'];
    }

    public function edit($id)
    {
        $banner = GlpBanner::findOrFail($id);
        return view('admin.sections.glp.banner.edit', compact('banner'));
    }

    public function update(Request $request, $id)
    {
        $banner = GlpBanner::findOrFail($id);

        //Update record
        $banner->update($request->except($this->inputFiles));

        //Save Files
        $fileService = new FileService();
        $fileService->saveFiles($request, $this->inputFiles, $this->mainFolder, $banner);

        return redirect()->route('admin.glp.banner.edit', $banner->id)->withSuccess('Se ha actualizado el banner satisfactoriamente.');
    }
}
