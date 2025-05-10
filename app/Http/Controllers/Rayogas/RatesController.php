<?php

namespace App\Http\Controllers\Rayogas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home\HomeRate;

class RatesController extends Controller
{
    public function index()
    {
      
        $rates = HomeRate::latest('id')->take(6)->get();

        $ratesRow = [];
        foreach ($rates as $key => $rate) {
         $ratesRow[] = [
                'title' => $rate->button_text,
                'zone' => $rate->zone,
                'file' => $rate->file_url
            ];
        }
        // $ratesRow = [];
        // $rowCount = 0;
        // $columnCount = 0;
        // $columnTitle = 'firstCol';

        // foreach ($rates as $key => $rate) {
        //     if ($columnCount == 0) {
        //         $ratesRow[$rowCount] = [];
        //         $ratesRow[$rowCount][$columnTitle] = [
        //             'title' => $rate->button_text,
        //             'zone' => $rate->zone,
        //             'file' => $rate->file_url
        //         ];
        //     } else {
        //         $columnTitle = 'secondCol';
        //         $ratesRow[$rowCount][$columnTitle] = [
        //             'title' => $rate->button_text,
        //             'zone' => $rate->zone,
        //             'file' => $rate->file_url
        //         ];
        //     }

        //     $columnCount++;
        //     if ($columnCount > 1) {
        //         $columnTitle = 'firstCol';
        //         $columnCount = 0;
        //         $rowCount++;
        //     }
        // }
    
        return view('rayogas.rates', compact('ratesRow'));
    }
}
