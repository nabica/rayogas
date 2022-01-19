<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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

    public function edit($id)
    {
        $rate = HomeRate::findOrFail($id);
        return view('admin.sections.home.rates.edit', compact('rate'));
    }

    public function update(Request $request, $id)
    {
        $rate = HomeRate::findOrFail($id);

        //Update record
        $rate->update($request->except($this->inputFiles));

        //Save Files
        $fileService = new FileService();
        $fileService->saveFiles($request, $this->inputFiles, $this->mainFolder, $rate);

        return redirect()->route('admin.home.rates.edit', $rate->id)->withSuccess('Se ha actualizado la tarifa satisfactoriamente.');
    }
}
