<?php

namespace App\Http\Controllers;

use App\Models\Empresa;

class EmpresaController extends Controller
{
    public function index()
    {
        $empresas = Empresa::with(['tareas.usuario'])->get();

        return response()->json($empresas);
    }
}
