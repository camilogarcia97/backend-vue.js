<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registro;

class RegistroController extends Controller
{
    public function guardarRegistro(Request $request)
    {
        $registro = new Registro([
            'nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido'),
            'correo' => $request->input('correo'),
            'telefono' => $request->input('telefono'),
            'cargo' => $request->input('cargo'),
        ]);

        $registro->save();

        return redirect()->back()->with('success', 'Registro guardado exitosamente');
    }

    public function obtenerRegistros()
    {
        $registros = Registro::all();
        return response()->json($registros);
    }
}
