<?php

namespace App\Http\Controllers\Rayogas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GlpController extends Controller
{
    public function index()
    {
        return view('rayogas.glp');
    }
}
