<?php

namespace App\Http\Controllers\Admin\Products;

use App\Http\Controllers\Controller;
use App\Models\Products\ProductsWappButton;
use Illuminate\Http\Request;

class ProductsWappButtonController extends Controller
{
    public function edit($id)
    {
        $wappButtons = ProductsWappButton::findOrFail($id);
        return view('admin.sections.products.wapp-buttons.edit', compact('wappButtons'));
    }

    public function update(Request $request, $id)
    {
        $wappButtons = ProductsWappButton::findOrFail($id);

        //Update record
        $wappButtons->update($request->all());

        return redirect()->route('admin.products.wapp-buttons.edit', $wappButtons->id)->withSuccess('Se han actualizado los enlaces satisfactoriamente.');
    }
}
