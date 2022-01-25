<?php

namespace App\Http\Controllers\Rayogas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products\ProductsBanner;

class ProductsController extends Controller
{
    public function index()
    {
        $productsBanner = ProductsBanner::first();
        return view('rayogas.products', compact('productsBanner'));
    }
}
