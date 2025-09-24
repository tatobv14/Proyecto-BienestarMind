<?php

namespace App\Http\Controllers\Reservaelemento;

use App\Http\Controllers\Controller;
use App\Models\Reservaelemento;
use Illuminate\Http\Request;
use App\Http\Requests\StoreReservaelementoRequest;
use App\Http\Requests\UpdateReservaelementoRequest;
class ReservaelementoController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservaelemento = Reservaelemento::all();
        return view('reservaelemento.index',compact('reservaelemento'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Fecha_Reserva = null; // Asignar un valor predeterminado o el valor que corresponda
        $Id_Usuario = null;
        $Id_Elemento = null;
        $Descripcion_Reserva = null;
        $Id_ficha = null;
        $reservaelemento = new Reservaelemento();
        return view('usuario.create',
        [
            'reservaelemento' => $reservaelemento,
            'Id_Usuario' => $Id_Usuario,
            'Id_Elemento' => $Id_Elemento,
            'Descripcion_Reserva' => $Descripcion_Reserva,
            'Id_ficha' => $Id_ficha,
            
        ]); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReservaelementoRequest $request)
    {
        Reservaelemento::create($request->validated());        
        return redirect()->route('reservaelemento.index')->with('ok','Reserva de elemento creada');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservaelemento $reservaelemento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservaelemento $reservaelemento)
    {
        $Fecha_Reserva = null; // Asignar un valor predeterminado o el valor que corresponda
        $Id_Usuario = null;
        $Id_Elemento = null;
        $Descripcion_Reserva = null;
        $Id_ficha = null;
        $reservaelemento = new Reservaelemento();
        return view('reservaelemento.create',
        [
            'reservaelemento' => $reservaelemento,
            'Id_Usuario' => $Id_Usuario,
            'Id_Elemento' => $Id_Elemento,
            'Descripcion_Reserva' => $Descripcion_Reserva,
            'Id_ficha' => $Id_ficha,
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReservaelementoRequest $request, Reservaelemento $reservaelemento)
    {
          $reservaelemento->update($request->validated());
        return redirect()->route('reservaelemento.index')->with('ok','Reserva de elemento actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservaelemento $reservaelemento)
    {
        try {
                $reservaelemento->delete(); 
                return back()->with('ok', 'reserva elemento eliminada');
            } catch (\Throwable $e) {
                // Suele fallar si hay FKs (p.ej. dependientes) sin cascade
                return back()->withErrors('No se puede eliminar: tiene registros relacionados.');
            }
    }
}
