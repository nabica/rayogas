<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\About\AboutValueRequest;
use App\Models\About\AboutValue;
use App\Services\Util\FileService;
use Config;

class AboutValueController extends Controller
{
    private $mainFolder;
    private $inputFiles;

    public function __construct()
    {
        $this->mainFolder = Config::get('rayogas.about.values');
        $this->inputFiles = ['image'];
    }

    public function index()
    {
        $values = AboutValue::latest('id')->paginate(10);
        return view('admin.sections.about.values.index', compact('values'));
    }

    public function create()
    {
        $value = new AboutValue;
        return view('admin.sections.about.values.create', compact('value'));
    }

    public function store(AboutValueRequest $request)
    {
        $value = AboutValue::create($request->except($this->inputFiles));

        //Save Files
        $fileService = new FileService();
        $fileService->saveFiles($request, $this->inputFiles, $this->mainFolder, $value);

        return redirect()->route('admin.about.values.index')->withSuccess('Se ha creado el valor ' . $value->title . '.');
    }

    public function edit($id)
    {
        $value = AboutValue::findOrFail($id);
        return view('admin.sections.about.values.edit', compact('value'));
    }

    public function update(AboutValueRequest $request, $id)
    {
        $value = AboutValue::findOrFail($id);

        //Update record
        $value->update($request->except($this->inputFiles));

        //Save Files
        $fileService = new FileService();
        $fileService->saveFiles($request, $this->inputFiles, $this->mainFolder, $value);

        return redirect()->route('admin.about.values.edit', $value->id)->withSuccess('Se ha actualizado el valor ' . $value->title . ' satisfactoriamente.');
    }

    public function destroy($id)
    {
        $value = AboutValue::findOrFail($id);
        $title = $value->title;
        $fileService = new FileService();
        $path = $this->mainFolder . '/'. $value->getFolderId();
        $fileService->deleteDirectory($path);
        $value->delete();

        return redirect()->route('admin.about.values.index')->withSuccess('El valor ' . $title . ' ha sido eliminado satisfactoriamente.');
    }
}
