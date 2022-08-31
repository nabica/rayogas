<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use App\Models\Home\HomeFloatingBar;
use Illuminate\Http\Request;

class HomeFloatingBarController extends Controller
{
    public function edit($id)
    {
        $floatingBar = HomeFloatingBar::findOrFail($id);
        return view('admin.sections.home.floating-bar.edit', compact('floatingBar'));
    }

    public function update(Request $request, $id)
    {
        $floatingBar = HomeFloatingBar::findOrFail($id);

        //Update record
        $floatingBar->update($request->all());

        return redirect()->route('admin.home.floating-bar.edit', $floatingBar->id)->withSuccess('Se ha actualizado la barra flotante satisfactoriamente.');
    }
}
