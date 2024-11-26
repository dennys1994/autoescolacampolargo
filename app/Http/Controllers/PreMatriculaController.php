<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreMatriculaController extends Controller
{
    public function index()
    {
        // Aqui você pode buscar os dados das pré-matrículas no banco de dados
        return view('pre-matricula.lista');
    }
}
