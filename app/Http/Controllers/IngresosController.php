<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IngresosController extends Controller
{
    public function ingresos() 
    {
        return view('ingresos');
    }
}
