<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Home\HomeRateRequest;
use App\Models\Home\HomeRate;
use App\Services\Util\FileService;
use Config;

class HomeRateController extends Controller
{
    private $mainFolder;
    private $inputFiles;

    public function __construct()
    {
        $this->mainFolder = Config::get('rayogas.home.rates');
        $this->inputFiles = ['file'];
    }

    public function index()
    {
        $rates = HomeRate::latest('id')->get();
        return view('admin.sections.home.rates.index', compact('rates'));
    }

    public function create()
    {
        $rate = new HomeRate;
        return view('admin.sections.home.rates.create', compact('rate'));
    }

    public function store(HomeRateRequest $request)
    {
        $rate = HomeRate::create($request->except($this->inputFiles));

        //Save Files
        $fileService = new FileService();
        $fileService->saveFiles($request, $this->inputFiles, $this->mainFolder, $rate);

        return redirect()->route('admin.home.rates.index')->withSuccess('Se ha creado la tarifa satisfactoriamente');
    }

    public function edit($id)
    {
        $rate = HomeRate::findOrFail($id);
        return view('admin.sections.home.rates.edit', compact('rate'));
    }

    public function update(HomeRateRequest $request, $id)
    {
        $rate = HomeRate::findOrFail($id);

        //Update record
        $rate->update($request->except($this->inputFiles));

        //Save Files
        $fileService = new FileService();
        $fileService->saveFiles($request, $this->inputFiles, $this->mainFolder, $rate);

        return redirect()->route('admin.home.rates.edit', $rate->id)->withSuccess('Se ha actualizado la tarifa satisfactoriamente.');
    }

    public function destroy($id)
    {
        $rate = HomeRate::findOrFail($id);
        $title = $rate->button_text;
        $fileService = new FileService();
        $path = $this->mainFolder . '/'. $rate->getFolderId();
        $fileService->deleteDirectory($path);
        $rate->delete();

        return redirect()->route('admin.home.rates.index')->withSuccess('La tarifa ' . $title . ' ha sido eliminada satisfactoriamente.');
    }
}
