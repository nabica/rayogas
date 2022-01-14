<?php

namespace App\Http\Controllers\Rayogas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('rayogas.blog-list');
    }

    public function show()
    {
        return view('rayogas.blog');
    }
}
