<?php

namespace App\Http\Controllers\Rayogas;

use App\Models\Home\RatesFile;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRatesFileRequest;
use App\Http\Requests\UpdateRatesFileRequest;

class RatesFileController extends Controller
{

    public function index()
    {
        // Obtener todos los registros de RatesFile con la relación de zona
        $ratesFiles = RatesFile::with('zone')->get();

        // Agrupar los datos por el campo 'month'
        $groupedRates = [];
        foreach ($ratesFiles as $rateFile) {
            $month = $rateFile->month;

            // Crear un arreglo para cada mes si no existe
            if (!isset($groupedRates[$month])) {
                $groupedRates[$month] = [];
            }

            // Agregar los datos al mes correspondiente
            $groupedRates[$month][] = [
                'file_name' => $rateFile->file_name,
                'zone_name' => $rateFile->zone->name, // Obtener el nombre de la zona
                'description' => $rateFile->description,
            ];
        }

        // Enviar los datos agrupados a la vista
        return view('rayogas.rates', compact('groupedRates'));
    }


    public function create() {}

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
