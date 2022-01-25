<?php

namespace App\Http\Controllers\Rayogas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home\HomeBanner;
use App\Models\Home\HomeFeature;
use App\Models\Home\HomeRate;

class HomeController extends Controller
{
    public function index()
    {
        $homeBanner = HomeBanner::first();
        $homeFeature = HomeFeature::first();
        $homeRates = HomeRate::oldest('id')->get();

        return view('rayogas.home', compact('homeBanner', 'homeFeature', 'homeRates'));
    }
}
