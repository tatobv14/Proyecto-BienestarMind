<?php

namespace App\Http\Controllers\Sede;

use App\Http\Controllers\Controller;
use App\Models\Sede;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSedeRequest;
use App\Http\Requests\UpdateSedeRequest;
class SedeController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $sede = Sede::all();
        return view('sede.index',compact('sede'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Nombre_sede = null; // Asignar un valor predeterminado o el valor que corresponda
        $Telefono_sede = null;
        $Direccion_sede = null;
        $sede = new Sede();
        return view('sede.create',
        [
            'sede' => $sede,
            'Nombre_sede' => $Nombre_sede,
            'Telefono_sede' => $Telefono_sede,
            'Direccion_sede' => $Direccion_sede,
            
        ]); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSedeRequest $request)
    {
         Sede::create($request->validated());        
        return redirect()->route('sede.index')->with('ok','sede creado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sede $sede)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sede $sede)
    {
        $Nombre_sede = null; // Asignar un valor predeterminado o el valor que corresponda
        $Telefono_sede = null;
        $Direccion_sede = null;
        $sede = new Sede();
        return view('sede.create',
        [
            'sede' => $sede,
            'Nombre_sede' => $Nombre_sede,
            'Telefono_sede' => $Telefono_sede,
            'Direccion_sede' => $Direccion_sede,
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSedeRequest $request, Sede $sede)
    {
        $sede->update($request->validated());
        return redirect()->route('sede.index')->with('ok','sede actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sede $sede)
    {
        try {
                $sede->delete(); 
                return back()->with('ok', 'sede eliminado');
            } catch (\Throwable $e) {
                // Suele fallar si hay FKs (p.ej. dependientes) sin cascade
                return back()->withErrors('No se puede eliminar: tiene registros relacionados.');
            }
    }
}
