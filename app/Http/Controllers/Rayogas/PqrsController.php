<?php

namespace App\Http\Controllers\Rayogas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\PqrsMail;
use App\Http\Requests\Rayogas\PqrsRequest;

class PqrsController extends Controller
{
    public function index()
    {
        return view('rayogas.pqrs');
    }

    public function store(PqrsRequest $request)
    {
        try {
            $contacts = ['servicioalcliente@rayogas.com', 'sergio@nabica.co', 'alejandra@nabica.co', 'fabian@nabica.co'];
            Mail::to($contacts)->send(new PqrsMail($request->all()));
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

    public function tanks()
    {
        return view('rayogas.thank-you-page');
    }
}
