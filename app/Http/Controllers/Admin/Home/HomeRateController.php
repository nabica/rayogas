<?php

namespace App\Http\Controllers\Admin\Home;
use Illuminate\Support\Facades\Config;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Home\StoreRatesFileRequest;
use App\Models\Home\RatesFile;
use App\Services\Util\FileService;


class HomeRateController extends Controller
{
    private $mainFolder;
    private $inputFiles;

    public function __construct()
    {
        $this->mainFolder = Config::get('rayogas.home.rates');
        $this->inputFiles = ['file_name'];
    }

    public function index()
    {
        $rates = RatesFile::latest('id')->get();
        return view('admin.sections.home.rates-files.index', compact('rates'));
    }

    public function create()
    {
        $rate = new RatesFile;
        return view('admin.sections.home.rates-files.create', compact('rate'));
    }

    public function store(StoreRatesFileRequest $request)
    {
        $rate = RatesFile::create($request->except($this->inputFiles));
        //Save Files
        $fileService = new FileService();
        $fileService->saveFiles($request, $this->inputFiles, $this->mainFolder, $rate);

        return redirect()->route('admin.home.rates.index')->withSuccess('Se ha creado la tarifa satisfactoriamente');
    }

    public function edit($id)
    {
        $rate = RatesFile::findOrFail($id);
        return view('admin.sections.home.rates-files.edit', compact('rate'));
    }

    public function update(StoreRatesFileRequest $request, $id)
    {
        $rate = RatesFile::findOrFail($id);

        //Update record
        $rate->update($request->except($this->inputFiles));

        //Save Files
        $fileService = new FileService();
        $fileService->saveFiles($request, $this->inputFiles, $this->mainFolder, $rate);

        return redirect()->route('admin.home.rates.edit', $rate->id)->withSuccess('Se ha actualizado la tarifa satisfactoriamente.');
    }

    public function destroy($id)
    {
        $rate = RatesFile::findOrFail($id);
        $title = $rate->button_text;
        $fileService = new FileService();
        $path = $this->mainFolder . '/' . $rate->getFolderId();
        $fileService->deleteDirectory($path);
        $rate->delete();

        return redirect()->route('admin.home.rates.index')->withSuccess('La tarifa ' . $title . ' ha sido eliminada satisfactoriamente.');
    }
}
