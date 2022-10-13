<?php

namespace App\Http\Controllers\Rayogas;

use App\Mail\PqrsMail;
use Illuminate\Http\Request;
use App\Models\Pqrs\PqrsObject;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\Rayogas\PqrsRequest;

class PqrsController extends Controller
{
    public function index()
    {
        $pqrs = PqrsObject::all();
        return view('rayogas.pqrs', compact('pqrs'));
    }

    public function store(PqrsRequest $request)
    {
        try {
            $contacts = ['servicioalcliente@rayogas.com'];
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
