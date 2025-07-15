<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;
use App\Rules\MaximoTareasPendientes;

class TareaController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'empresa_id' => 'required|exists:empresas,id',
            'usuario_id' => ['required', 'exists:usuarios,id', new MaximoTareasPendientes],
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
        ]);

        $tarea = Tarea::create([
            'nombre' => $validated['nombre'],
            'descripcion' => $validated['descripcion'],
            'empresa_id' => $validated['empresa_id'],
            'usuario_id' => $validated['usuario_id'],
        ]);

        $tarea->load(['usuario', 'empresa']);

        return response()->json($tarea, 201);
    }
}
