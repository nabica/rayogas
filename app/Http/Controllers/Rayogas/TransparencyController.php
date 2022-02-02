<?php

namespace App\Http\Controllers\Rayogas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog\BlogBanner;

class TransparencyController extends Controller
{
    public function index()
    {       
        $blogBanner = BlogBanner::first();
        return view('rayogas.transparency',compact('blogBanner'));
    }
}