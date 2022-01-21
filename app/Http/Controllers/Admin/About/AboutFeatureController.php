<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About\AboutFeature;
use App\Services\Util\FileService;
use Config;

class AboutFeatureController extends Controller
{
    private $mainFolder;
    private $inputFiles;

    public function __construct()
    {
        $this->mainFolder = Config::get('rayogas.about.features');
        $this->inputFiles = ['image'];
    }

    public function index()
    {
        $features = AboutFeature::oldest('id')->get();
        return view('admin.sections.about.features.index', compact('features'));
    }

    public function edit($id)
    {
        $feature = AboutFeature::findOrFail($id);
        return view('admin.sections.about.features.edit', compact('feature'));
    }

    public function update(Request $request, $id)
    {
        $feature = AboutFeature::findOrFail($id);

        //Update record
        $feature->update($request->except($this->inputFiles));

        //Save Files
        $fileService = new FileService();
        $fileService->saveFiles($request, $this->inputFiles, $this->mainFolder, $feature);

        return redirect()->route('admin.about.features.edit', $feature->id)->withSuccess('Se ha actualizado el destacado satisfactoriamente.');
    }
}
