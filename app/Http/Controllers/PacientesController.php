<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PacientesController extends Controller
{
    public function pacientes() 
    {
        return view('pacientes');
    }
}
