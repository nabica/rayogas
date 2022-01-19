<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home\HomeFeature;
use App\Services\Util\FileService;
use Config;

class HomeFeatureController extends Controller
{
    private $mainFolder;
    private $inputFiles;

    public function __construct()
    {
        $this->mainFolder = Config::get('rayogas.home.feature');
        $this->inputFiles = ['image'];
    }

    public function edit($id)
    {
        $feature = HomeFeature::findOrFail($id);
        return view('admin.sections.home.feature.edit', compact('feature'));
    }

    public function update(Request $request, $id)
    {
        $feature = HomeFeature::findOrFail($id);

        //Update record
        $feature->update($request->except($this->inputFiles));

        //Save Files
        $fileService = new FileService();
        $fileService->saveFiles($request, $this->inputFiles, $this->mainFolder, $feature);

        return redirect()->route('admin.home.feature.edit', $feature->id)->withSuccess('Se ha actualizado el destacado satisfactoriamente.');
    }
}
