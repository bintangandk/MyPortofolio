<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function single()
    {
        return view('pages.single');
    }
}
