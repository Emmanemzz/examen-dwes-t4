<?php

namespace App\Http\Controllers;

use App\Models\Prenda;
use Illuminate\Http\Request;

class PrendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mostrar las prendas
        $prendas = Prenda::all();
        return view('prendas.index',compact('prendas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('prendas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required|numeric',
        ], [
            'nombre.required' => 'El nombre es obligatorio',
            'descripcion.required' => 'La descripción es obligatoria',
            'precio.required' => 'El precio es obligatorio',
            'precio.numeric' => 'El precio debe ser un número'
        ]);

        Prenda::create($request->all());

        return redirect()->route('prendas.index')
            ->with('success', 'Prenda creada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prenda $prenda)
    {
        //
        return view('prendas.show',compact('prenda'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prenda $prenda)
    {
        //
        return view('prendas.edit',compact('prenda'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prenda $prenda)
    {
        //
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required|numeric',
        ], [
            'nombre.required' => 'El nombre es obligatorio',
            'descripcion.required' => 'La descripción es obligatoria',
            'precio.required' => 'El precio es obligatorio',
            'precio.numeric' => 'El precio debe ser un número'
        ]);

        $prenda->update($request->all());
        return redirect()->route('prendas.index')
            ->with('success', 'Prenda actualizada correctamente');
            
    }
    /**
     * Confirma el borrado
     */
    public function confirmDestroy(Prenda $prenda)
    {
        return view('prendas.confirmDestroy', compact('prenda'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prenda $prenda)
    {
        //
        $prenda->delete();
        return redirect()->route('prendas.index')
            ->with('success', 'Prenda eliminada correctamente');
    }
}
