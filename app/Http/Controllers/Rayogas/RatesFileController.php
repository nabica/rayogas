<?php

namespace App\Http\Controllers\Rayogas;

use App\Models\Home\RatesFile;
use App\Models\Home\Zone;
use App\Http\Controllers\Controller;

class RatesFileController extends Controller
{
    public function index()
    {
        $ratesFiles = RatesFile::with('zone')->get();
        $allZones = Zone::orderBy('id')->get();
        $groupedByYear = [];

        foreach ($ratesFiles as $file) {
            $year = $file->created_at->format('Y');
            $month = $file->month;

            if (!isset($groupedByYear[$year][$month])) {
                $groupedByYear[$year][$month] = $allZones->map(function ($zone) {
                    return [
                        'id' => null,
                        'file_name' => null,
                        'zone_name' => $zone->name,
                        'description' => null,
                        'zone_id' => $zone->id,
                        'has_file' => false,
                        'created_at' => null,
                    ];
                })->keyBy('zone_id')->all();
            }

            $groupedByYear[$year][$month][$file->zone->id] = [
                'id' => $file->id < 10 && $file->id > 0 ? '0' . $file->id : $file->id,
                'file_name' => $file->file_name,
                'zone_name' => $file->zone->name,
                'description' => $file->description,
                'zone_id' => $file->zone->id,
                'has_file' => true,
                'created_at' => $file->created_at ? $file->created_at->format('Y-m-d H:i:s') : null,
            ];
        }

        $monthsOrder = [
            'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
            'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
        ];
        krsort($groupedByYear);
        foreach ($groupedByYear as &$months) {
            uksort($months, function ($a, $b) use ($monthsOrder) {
                return array_search($a, $monthsOrder) <=> array_search($b, $monthsOrder);
            });
            // Reindexa zonas para cada mes
            foreach ($months as &$zones) {
                $zones = array_values($zones);
            }
        }

        return view('rayogas.rates', ['groupedRates' => $groupedByYear]);
    }
}
