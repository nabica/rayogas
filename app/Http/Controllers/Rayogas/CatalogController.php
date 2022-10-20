<?php

namespace App\Http\Controllers\Rayogas;

use App\Http\Controllers\Controller;
use App\Models\Home\HomeBanner;
use App\Models\Home\HomeFeature;
use App\Models\Home\HomeRate;

class CatalogController extends Controller
{
    public function index()
    {
        $homeBanner = HomeBanner::first();
        $homeFeature = HomeFeature::first();
        $homeRates = HomeRate::latest('id')->limit(2)->get();
        return view('rayogas.catalog.index');
    }

}