<?php

namespace App\Http\Controllers\Rayogas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About\AboutBanner;
use App\Models\About\AboutFeature;
use App\Models\About\AboutValue;
use App\Models\About\AboutWhyChooseFeature;

class AboutController extends Controller
{
    public function index()
    {
        $aboutBanner = AboutBanner::first();
        $aboutFeatures = AboutFeature::oldest('id')->get();
        $aboutValues = AboutValue::oldest('id')->get();
        $aboutWhyChooseFeature = AboutWhyChooseFeature::oldest('id')->get();

        return view('rayogas.about', compact('aboutBanner', 'aboutFeatures', 'aboutValues', 'aboutWhyChooseFeature'));
    }
}
