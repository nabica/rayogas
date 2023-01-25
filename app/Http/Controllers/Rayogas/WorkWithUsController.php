<?php

namespace App\Http\Controllers\Rayogas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Rayogas\WorkWithUsRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\WorkWithUsMail;

class WorkWithUsController extends Controller
{
    public function index()
    {
        return view('rayogas.work-with-us');
    }

    public function store(WorkWithUsRequest $request)
    {
        try {
            $contacts = ['servicioalcliente@rayogas.com', 'fabian.ramirez@rayogas.com', 'seleccionrg19@gmail.com'];
            Mail::to($contacts)->send(new WorkWithUsMail($request->all()));
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
