<?php

namespace App\Http\Controllers\Admin\Pqrs;

use Illuminate\Http\Request;
use App\Models\Pqrs\PqrsObject;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Pqrs\PqrsObjectRequest;

class PqrsObjectController extends Controller
{
    public function index()
    {
        $pqrs = PqrsObject::oldest('id')->paginate(10);
        return view('admin.sections.pqrs.objects.index', compact('pqrs'));
    }

    public function create()
    {
        $pqr = new PqrsObject;
        return view('admin.sections.pqrs.objects.create', compact('pqr'));
    }

    public function store(PqrsObjectRequest $request)
    {
        $pqr = PqrsObject::create($request->all());

        return redirect()->route('admin.pqrs.objects.index')->withSuccess('Se ha creado la pqr ' . $pqr->name . '.');
    }

    public function edit($id)
    {
        $pqr = PqrsObject::findOrFail($id);
        return view('admin.sections.pqrs.objects.edit', compact('pqr'));
    }

    public function update(PqrsObjectRequest $request, $id)
    {
        $pqr = PqrsObject::findOrFail($id);

        //Update record
        $pqr->update($request->all());

        return redirect()->route('admin.pqrs.objects.edit', $pqr->id)->withSuccess('Se ha actualizado la pqr satisfactoriamente.');
    }

    public function destroy($id)
    {
        $pqr = PqrsObject::findOrFail($id);
        $name = $pqr->name;
        $pqr->delete();

        return redirect()->route('admin.pqrs.objects.index')->withSuccess('La pqr ' . $name . ' ha sido eliminada satisfactoriamente.');
    }
}
