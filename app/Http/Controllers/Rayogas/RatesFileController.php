<?php

namespace App\Http\Controllers\Rayogas;

use App\Models\Home\RatesFile;
use App\Http\Controllers\Controller;

class RatesFileController extends Controller
{

    public function index()
    {
        $ratesFiles = RatesFile::with('zone')->get();
        $yearunique = $ratesFiles->pluck('created_at')->map(function ($date) {
            return \Carbon\Carbon::parse($date)->format('Y');
        })->unique()->values()->all();
        $allZones = \App\Models\Home\Zone::orderBy('id')->get();
        $monthsWithFiles = $ratesFiles->map(function ($file) {
            $month = $file->month;
            $year = \Carbon\Carbon::parse($file->created_at)->format('Y');
            return "{$month} {$year}";
        })->unique()->values()->all();
        $groupedRates = collect($monthsWithFiles)->mapWithKeys(function ($month) use ($allZones) {
            return [$month => $allZones->map(function ($zone) {
                return [
                    'id' => null,
                    'file_name' => null,
                    'zone_name' => $zone->name,
                    'description' => null,
                    'zone_id' => $zone->id,
                    'has_file' => false,
                    'created_at' => null,
                ];
            })->all()];
        })->all();

        foreach ($ratesFiles as $file) {
            $monthYear = "{$file->month} " . \Carbon\Carbon::parse($file->created_at)->format('Y');
            $groupedRates[$monthYear] = collect($groupedRates[$monthYear])->map(function ($zone) use ($file) {
                if ($zone['zone_id'] === $file->zone->id) {
                    return [
                        'id' => $file->id < 10 && $file->id > 0 ? '0' . $file->id : $file->id,
                        'file_name' => $file->file_name,
                        'zone_name' => $file->zone->name,
                        'description' => $file->description,
                        'zone_id' => $file->zone->id,
                        'has_file' => true,
                        'created_at' => $file->created_at ? $file->created_at->format('Y-m-d H:i:s') : null,
                    ];
                }
                return $zone;
            })->all();
        }

        $groupedRates = collect($groupedRates)->sortByDesc(function ($value, $key) {
            [$monthName, $year] = explode(' ', $key);
            $months = [
                'Enero' => 1, 'Febrero' => 2, 'Marzo' => 3, 'Abril' => 4,
                'Mayo' => 5, 'Junio' => 6, 'Julio' => 7, 'Agosto' => 8,
                'Septiembre' => 9, 'Octubre' => 10, 'Noviembre' => 11, 'Diciembre' => 12,
            ];
            $monthNumber = $months[$monthName] ?? 0;
            return ((int)$year * 100) + $monthNumber;
        })->all();

        return view('rayogas.rates', compact('groupedRates'));
    }
}
