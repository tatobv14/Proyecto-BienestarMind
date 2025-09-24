<?php

namespace App\Http\Controllers\Espacio;

use App\Http\Controllers\Controller;
use App\Models\Espacio;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEspacioRequest;
use App\Http\Requests\UpdateEspacioRequest;
class EspacioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $espacio = Espacio::all();
        return view('espacio.index',compact('espacio'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Id_Espacio = null; // Asignar un valor predeterminado o el valor que corresponda
        $Id_Sede = null;
        $Nombre_del_espacio = null;
        $espacio = new Espacio();
        return view('espacio.create',
        [
            'espacio' => $espacio,
            'Id_Espacio' => $Id_Espacio,
            'Id_Sede' => $Id_Sede,
            'Nombre_del_espacio' => $Nombre_del_espacio,
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEspacioRequest $request)
    {
        Espacio::create($request->validated());        
        return redirect()->route('espacio.index')->with('ok','Espacio creado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Espacio $espacio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Espacio $espacio)
    {
        $Id_Espacio = null; // Asignar un valor predeterminado o el valor que corresponda
        $Id_Sede = null;
        $Nombre_del_espacio = null;
        $espacio = new Espacio();
        return view('espacio.create',
        [
            'espacio' => $espacio,
            'Id_Espacio' => $Id_Espacio,
            'Id_Sede' => $Id_Sede,
            'Nombre_del_espacio' => $Nombre_del_espacio,
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEspacioRequest $request, Espacio $espacio)
    {
        $espacio->update($request->validated());
        return redirect()->route('espacio.index')->with('ok','Espacio actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Espacio $espacio)
    {
        try {
                $espacio->delete(); 
                return back()->with('ok', 'Espacio eliminado');
            } catch (\Throwable $e) {
                // Suele fallar si hay FKs (p.ej. dependientes) sin cascade
                return back()->withErrors('No se puede eliminar: tiene registros relacionados.');
            }
    }
}
