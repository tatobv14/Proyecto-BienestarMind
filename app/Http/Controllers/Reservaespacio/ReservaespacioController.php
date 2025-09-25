<?php

namespace App\Http\Controllers\Reservaespacio;

use App\Http\Controllers\Controller;
use App\Models\Reservaespacio;
use Illuminate\Http\Request;
use App\Http\Requests\StoreReservaespacioRequest;
use App\Http\Requests\UpdateReservaespacioRequest;
class ReservaespacioController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservaespacio = Reservaespacio::all();
        return view('reservaespacio.index',compact('reservaespacio'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Fecha_Reserva = null; // Asignar un valor predeterminado o el valor que corresponda
        $Id_Usuario = null;
        $Id_Espacio = null;
        $Duracion = null;
        $Motivo_Reserva = null;
        $Id_ficha = null;
        $reservaespacio = new Reservaespacio();
        return view('reservaespacio.create',
        [
            'reservaespacio' => $reservaespacio,
            'Fecha_Reserva' => $Fecha_Reserva,
            'Id_Usuario' => $Id_Usuario,
            'Id_Espacio' => $Id_Espacio,
            'Duracion' => $Duracion,
            'Motivo_Reserva' => $Motivo_Reserva,
            'Id_ficha' => $Id_ficha,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReservaespacioRequest $request)
    {
        Reservaespacio::create($request->validated());        
        return redirect()->route('reservaespacio.index')->with('ok','reserva de espacio creado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservaespacio $reservaespacio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservaespacio $reservaespacio)
    {
        $Fecha_Reserva = null; // Asignar un valor predeterminado o el valor que corresponda
        $Id_Usuario = null;
        $Id_Espacio = null;
        $Duracion = null;
        $Motivo_Reserva = null;
        $Id_ficha = null;
        $reservaespacio = new Reservaespacio();
        return view('reservaespacio.create',
        [
            'reservaespacio' => $reservaespacio,
            'Fecha_Reserva' => $Fecha_Reserva,
            'Id_Usuario' => $Id_Usuario,
            'Id_Espacio' => $Id_Espacio,
            'Duracion' => $Duracion,
            'Motivo_Reserva' => $Motivo_Reserva,
            'Id_ficha' => $Id_ficha,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReservaespacioRequest $request, Reservaespacio $reservaespacio)
    {
        $reservaespacio->update($request->validated());
        return redirect()->route('reservaespacio.index')->with('ok','reserva de espacio actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservaespacio $reservaespacio)
    {
         try {
                $reservaespacio->delete(); 
                return back()->with('ok', 'reserva espacio eliminado');
            } catch (\Throwable $e) {
                // Suele fallar si hay FKs (p.ej. dependientes) sin cascade
                return back()->withErrors('No se puede eliminar: tiene registros relacionados.');
            }
    }
}
