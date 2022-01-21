<?php

namespace App\Http\Controllers\Admin\Glp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Glp\GlpRecommendationPdf;
use App\Services\Util\FileService;
use Config;

class GlpRecommendationPdfController extends Controller
{
    private $mainFolder;
    private $inputFiles;

    public function __construct()
    {
        $this->mainFolder = Config::get('rayogas.glp.recommendationPdfs');
        $this->inputFiles = ['file'];
    }

    public function index()
    {
        $pdfs = GlpRecommendationPdf::oldest('id')->get();
        return view('admin.sections.glp.recommendation-pdfs.index', compact('pdfs'));
    }

    public function edit($id)
    {
        $pdf = GlpRecommendationPdf::findOrFail($id);
        return view('admin.sections.glp.recommendation-pdfs.edit', compact('pdf'));
    }

    public function update(Request $request, $id)
    {
        $pdf = GlpRecommendationPdf::findOrFail($id);

        //Update record
        $pdf->update($request->except($this->inputFiles));

        //Save Files
        $fileService = new FileService();
        $fileService->saveFiles($request, $this->inputFiles, $this->mainFolder, $pdf);

        return redirect()->route('admin.glp.recommendation-pdfs.edit', $pdf->id)->withSuccess('Se ha actualizado el pdf satisfactoriamente.');
    }
}
