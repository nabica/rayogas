<?php

namespace App\Http\Controllers\Admin\Glp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Glp\GlpRecommendationTipRequest;
use App\Models\Glp\GlpRecommendationTip;
use App\Services\Util\FileService;
use Config;

class GlpRecommendationTipController extends Controller
{
    private $mainFolder;
    private $inputFiles;

    public function __construct()
    {
        //
    }

    public function index()
    {
        $tips = GlpRecommendationTip::oldest('id')->get();
        return view('admin.sections.glp.recommendation-tips.index', compact('tips'));
    }

    public function edit($id)
    {
        $tip = GlpRecommendationTip::findOrFail($id);
        return view('admin.sections.glp.recommendation-tips.edit', compact('tip'));
    }

    public function update(GlpRecommendationTipRequest $request, $id)
    {
        $tip = GlpRecommendationTip::findOrFail($id);

        //Update record
        $tip->update($request->all());

        return redirect()->route('admin.glp.recommendation-tips.edit', $tip->id)->withSuccess('Se ha actualizado el tip satisfactoriamente.');
    }
}
