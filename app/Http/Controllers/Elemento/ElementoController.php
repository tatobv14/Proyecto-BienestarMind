<?php

namespace App\Http\Controllers\Elemento;

use App\Http\Controllers\Controller;
use App\Models\Elemento;
use Illuminate\Http\Request;
use App\Http\Requests\StoreElementoRequest;
use App\Http\Requests\UpdateElementoRequest;

class ElementoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $elementos = Elemento::all();
        return view("elemento.index", compact("elementos"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Id_Categoria = null; // Asignar un valor predeterminado o el valor que corresponda
        $Nombre_Elemento = null;
        $Estado_Elemento = null;
        $elemento = new Elemento();
        return view('elemento.create',
        [
            'elemento' => $elemento,
            'Id_Categoria' => $Id_Categoria,
            'Nombre_Elemento' => $Nombre_Elemento,
            'Estado_Elemento' => $Estado_Elemento,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreElementoRequest $request)
    {
        Elemento::create($request->validated());        
        return redirect()->route('elemento.index')->with('ok','Elemento creado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Elemento $elemento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Elemento $elemento)
    {
        $Id_Categoria = null; // Asignar un valor predeterminado o el valor que corresponda
        $Nombre_Elemento = null;
        $Estado_Elemento = null;
        $elemento = new Elemento();
        return view('elemento.create',
        [
            'elemento' => $elemento,
            'Id_Categoria' => $Id_Categoria,
            'Nombre_Elemento' => $Nombre_Elemento,
            'Estado_Elemento' => $Estado_Elemento,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateElementoRequest $request, Elemento $elemento)
    {
        $elemento->update($request->validated());
        return redirect()->route('elemento.index')->with('ok','Elemento actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Elemento $elemento)
    {
        try {
                $elemento->delete(); 
                return back()->with('ok', 'Elemento eliminado');
            } catch (\Throwable $e) {
                // Suele fallar si hay FKs (p.ej. dependientes) sin cascade
                return back()->withErrors('No se puede eliminar: tiene registros relacionados.');
            }
    }
}
