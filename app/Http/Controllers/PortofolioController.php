<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function single(){
        return view('single');
    }
}
