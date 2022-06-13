<?php

namespace App\Http\Controllers\Rayogas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home\HomeBanner;
use App\Models\Home\HomeFeature;
use App\Models\Home\HomeRate;
use Illuminate\Support\Facades\Mail;
use App\Mail\ServiceRequestMail;
use App\Http\Requests\Rayogas\ServiceRequest;

class HomeController extends Controller
{
    public function index()
    {
        $homeBanner = HomeBanner::first();
        $homeFeature = HomeFeature::first();
        $homeRates = HomeRate::latest('id')->limit(2)->get();
        return view('rayogas.home', compact('homeBanner', 'homeFeature', 'homeRates'));
    }

    public function serviceRequest(ServiceRequest $request)
    {
        try {
            $contacts = ['lockdownlab@gmail.com'];
            Mail::to($contacts)->send(new ServiceRequestMail($request->all()));
            return response()->json([
                'status' => 200,
                'message' => 'Mensaje enviado'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => '535 5.7.0',
                'message' => 'Ocurrio un error al enviar el mensaje',
                //'description' => $e->getMessage()
            ], 535);
        }
    }
}