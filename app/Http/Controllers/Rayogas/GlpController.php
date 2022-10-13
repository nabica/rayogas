<?php

namespace App\Http\Controllers\Rayogas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Glp\GlpBanner;
use App\Models\Glp\GlpRecommendationTip;
use App\Models\Glp\GlpRecommendationPdf;
use App\Models\Glp\GlpFaq;

class GlpController extends Controller
{
    public function index()
    {
        $glpBanner = GlpBanner::first();
        $glpRecommendationTips = GlpRecommendationTip::oldest('id')->get();
        $glpRecommendationPdfs = GlpRecommendationPdf::oldest('id')->get();
        $glpFaqs = GlpFaq::oldest('id')->get();

        return view('rayogas.glp', compact('glpBanner', 'glpRecommendationTips', 'glpRecommendationPdfs', 'glpFaqs'));
    }
}
