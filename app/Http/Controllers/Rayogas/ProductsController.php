<?php

namespace App\Http\Controllers\Rayogas;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Products\ProductsBanner;
use App\Models\Products\ProductsWappButton;

class ProductsController extends Controller
{
    public function index()
    {
        $productsBanner = ProductsBanner::first();
        $wappButtons = ProductsWappButton::findOrFail(1);
        return view('rayogas.products', compact('productsBanner', 'wappButtons'));
    }
}
