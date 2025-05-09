<?php

namespace App\Http\Controllers;

use App\Models\Home\RatesFile;
use App\Http\Requests\StoreRatesFileRequest;
use App\Http\Requests\UpdateRatesFileRequest;

class RatesFileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRatesFileRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRatesFileRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Home\RatesFile  $ratesFile
     * @return \Illuminate\Http\Response
     */
    public function show(RatesFile $ratesFile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home\RatesFile  $ratesFile
     * @return \Illuminate\Http\Response
     */
    public function edit(RatesFile $ratesFile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRatesFileRequest  $request
     * @param  \App\Models\Home\RatesFile  $ratesFile
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRatesFileRequest $request, RatesFile $ratesFile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home\RatesFile  $ratesFile
     * @return \Illuminate\Http\Response
     */
    public function destroy(RatesFile $ratesFile)
    {
        //
    }
}
