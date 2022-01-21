<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About\AboutWhyChooseFeature;
use App\Services\Util\FileService;
use Config;

class AboutWhyChooseFeatureController extends Controller
{
    private $mainFolder;
    private $inputFiles;

    public function __construct()
    {
        $this->mainFolder = Config::get('rayogas.about.whyChooseFeatures');
        $this->inputFiles = ['image'];
    }

    public function index()
    {
        $features = AboutWhyChooseFeature::oldest('id')->get();
        return view('admin.sections.about.why-choose-features.index', compact('features'));
    }

    public function edit($id)
    {
        $feature = AboutWhyChooseFeature::findOrFail($id);
        return view('admin.sections.about.why-choose-features.edit', compact('feature'));
    }

    public function update(Request $request, $id)
    {
        $feature = AboutWhyChooseFeature::findOrFail($id);

        //Update record
        $feature->update($request->except($this->inputFiles));

        //Save Files
        $fileService = new FileService();
        $fileService->saveFiles($request, $this->inputFiles, $this->mainFolder, $feature);

        return redirect()->route('admin.about.why-choose-features.edit', $feature->id)->withSuccess('Se ha actualizado el destacado satisfactoriamente.');
    }
}
