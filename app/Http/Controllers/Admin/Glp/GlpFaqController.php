<?php

namespace App\Http\Controllers\Admin\Glp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Glp\GlpFaqRequest;
use App\Models\Glp\GlpFaq;
use App\Services\Util\FileService;
use Config;

class GlpFaqController extends Controller
{
    private $mainFolder;
    private $inputFiles;

    public function __construct()
    {
        //
    }

    public function index()
    {
        $faqs = GlpFaq::latest('id')->paginate(10);
        return view('admin.sections.glp.faqs.index', compact('faqs'));
    }

    public function create()
    {
        $faq = new GlpFaq;
        return view('admin.sections.glp.faqs.create', compact('faq'));
    }

    public function store(GlpFaqRequest $request)
    {
        $faq = GlpFaq::create($request->except($this->inputFiles));

        return redirect()->route('admin.glp.faqs.index')->withSuccess('Se ha creado la pregunta ' . $faq->title . '.');
    }

    public function edit($id)
    {
        $faq = GlpFaq::findOrFail($id);
        return view('admin.sections.glp.faqs.edit', compact('faq'));
    }

    public function update(GlpFaqRequest $request, $id)
    {
        $faq = GlpFaq::findOrFail($id);

        //Update record
        $faq->update($request->all());

        return redirect()->route('admin.glp.faqs.edit', $faq->id)->withSuccess('Se ha actualizado la pregunta satisfactoriamente.');
    }

    public function destroy($id)
    {
        $faq = GlpFaq::findOrFail($id);
        $title = $faq->title;
        $faq->delete();

        return redirect()->route('admin.glp.faqs.index')->withSuccess('La pregunta ' . $title . ' ha sido eliminada satisfactoriamente.');
    }
}
