<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ElementoInventario;

class ElementoInventarioController extends Controller
{
    /**
     * Muestra una lista de los elementos del inventario.
     */
    public function index()
    {
        $elementos = ElementoInventario::all();
        return view('inventario.index', ['elementos' => $elementos]);
    }

    /**
     * Muestra el formulario para crear un nuevo elemento.
     */
    public function create()
    {
        return view('inventario.crear');
    }

    /**
     * Guarda un nuevo elemento en la base de datos.
     */
    public function store(Request $request)
    {
        // 1. Validación
        $request->validate([
            'nombre_elemento' => 'required|string|max:255',
            'marca' => 'nullable|string|max:255',
            'lote' => 'nullable|string|max:50',
            'fecha_vencimiento' => 'nullable|date',
            'existencias_elemento' => 'required|integer|min:0',
        ]);

        // 2. Creación del elemento
        ElementoInventario::create([
            'nombre_elemento' => $request->nombre_elemento,
            'marca' => $request->marca,
            'lote' => $request->lote,
            'fecha_vencimiento' => $request->fecha_vencimiento,
            'existencias_elemento' => $request->existencias_elemento,
            'laboratorio_id' => 1, // Valor fijo por ahora
        ]);

        // 3. Redirección
        return redirect()->route('inventario.index')->with('success', '¡Elemento añadido al inventario exitosamente!');
    }
}