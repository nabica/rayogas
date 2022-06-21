<?php

namespace App\Http\Controllers\Rayogas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog\BlogBanner;

class TermsController extends Controller
{
    public function index()
    {       
        return view('rayogas.terms');
    }
}