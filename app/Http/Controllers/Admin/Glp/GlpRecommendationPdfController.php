<?php

namespace App\Http\Controllers\Admin\Glp;

use App\Http\Controllers\Controller;
use App\Http\Requests\Rayogas\GlpRecommendationPdfRequest;
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

    public function create()
    {
        $pdf = new GlpRecommendationPdf;
        return view('admin.sections.glp.recommendation-pdfs.create', compact('pdf'));
    }

    public function store(GlpRecommendationPdfRequest $request)
    {
        $pdf = GlpRecommendationPdf::create($request->except($this->inputFiles));

        //Save Files
        $fileService = new FileService();
        $fileService->saveFiles($request, $this->inputFiles, $this->mainFolder, $pdf);

        return redirect()->route('admin.glp.recommendation-pdfs.index', $pdf->id)->withSuccess('Se ha creado el pdf satisfactoriamente.');
    }

    public function edit($id)
    {
        $pdf = GlpRecommendationPdf::findOrFail($id);
        return view('admin.sections.glp.recommendation-pdfs.edit', compact('pdf'));
    }

    public function update(GlpRecommendationPdfRequest $request, $id)
    {
        $pdf = GlpRecommendationPdf::findOrFail($id);

        //Update record
        $pdf->update($request->except($this->inputFiles));

        //Save Files
        $fileService = new FileService();
        $fileService->saveFiles($request, $this->inputFiles, $this->mainFolder, $pdf);

        return redirect()->route('admin.glp.recommendation-pdfs.edit', $pdf->id)->withSuccess('Se ha actualizado el pdf satisfactoriamente.');
    }

    public function destroy($id)
    {
        $pdf = GlpRecommendationPdf::findOrFail($id);
        $title = $pdf->title;
        $fileService = new FileService();
        $path = $this->mainFolder . '/'. $pdf->getFolderId();
        $fileService->deleteDirectory($path);
        $pdf->delete();

        return redirect()->route('admin.glp.recommendation-pdfs.index')->withSuccess('El pdf ' . $title . ' ha sido eliminado satisfactoriamente.');
    }
}
