<?php

namespace App\Http\Controllers\Rayogas;

use App\Models\Home\RatesFile;
use App\Http\Controllers\Controller;

class RatesFileController extends Controller
{

    public function index()
    {
        $ratesFiles = RatesFile::with('zone')->get();
        $allZones = \App\Models\Home\Zone::orderBy('id')->get();
        $monthsWithFiles = $ratesFiles->pluck('month')->unique()->values()->all();
        $groupedRates = collect($monthsWithFiles)->mapWithKeys(function ($month) use ($allZones) {
            return [$month => $allZones->map(function ($zone) {
                return [
                    'id' => null,
                    'file_name' => null,
                    'zone_name' => $zone->name,
                    'description' => null,
                    'zone_id' => $zone->id,
                    'has_file' => false
                ];
            })->all()];
        })->all();

        foreach ($ratesFiles as $file) {
            $groupedRates[$file->month] = collect($groupedRates[$file->month])->map(function ($zone) use ($file) {
                if ($zone['zone_id'] === $file->zone->id) {
                    return [
                        'id' => $file->id < 10 && $file->id > 0 ? '0' . $file->id : $file->id,
                        'file_name' => $file->file_name,
                        'zone_name' => $file->zone->name,
                        'description' => $file->description,
                        'zone_id' => $file->zone->id,
                        'has_file' => true
                    ];
                }
                return $zone;
            })->all();
        }

        return view('rayogas.rates', compact('groupedRates'));
    }
}
