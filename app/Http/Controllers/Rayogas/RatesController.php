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
    
        return view('rayogas.rates', compact('ratesRow'));
    }
}
