<?php

namespace App\Http\Controllers\Reservaespacio;

use App\Http\Controllers\Controller;
use App\Models\Reservaespacio;
use App\Models\Ficha;
use App\Models\Usuario;
use App\Models\Espacio;
use Illuminate\Http\Request;
use App\Http\Requests\StoreReservaespacioRequest;
use App\Http\Requests\UpdateReservaespacioRequest;
class ReservaespacioController
{

    public function index()
    {
        $reservaespacio = Reservaespacio::all();
        return view('reservaespacio.index', compact('reservaespacio'));
    }

    public function create()
    {
        $ficha = Ficha::all();
        $usuario = Usuario::all();
        $espacio = Espacio::all();

        return view(
            'reservaespacio.create',
            [
                'reservaespacio' => new Reservaespacio(),
                'ficha' => $ficha,
                'usuario' => $usuario,
                'espacio' => $espacio
            ]
        );
    }

    public function store(StoreReservaespacioRequest $request)
    {
        Reservaespacio::create($request->validated());
        return redirect()->route('reservaespacio.index')->with('ok', 'Reserva de espacio creada');
    }

    public function show(Reservaespacio $reservaespacio)
    {
        return view('reservaespacio.show', compact('reservaespacio'));
    }

    public function edit(Reservaespacio $reservaespacio)
    {
        $ficha = Ficha::all();
        $usuario = Usuario::all();
        $espacio = Espacio::all();

        return view(
            'reservaespacio.edit',
            [
                'reservaespacio' => $reservaespacio,
                'ficha' => $ficha,
                'usuario' => $usuario,
                'espacio' => $espacio
            ]
        );
    }

    public function update(UpdateReservaespacioRequest $request, Reservaespacio $reservaespacio)
    {
        $reservaespacio->update($request->validated());
        return redirect()->route('reservaespacio.index')->with('ok', 'Reserva de espacio actualizada');
    }

    public function destroy(Reservaespacio $reservaespacio)
    {
        try {
            $reservaespacio->delete();
            return back()->with('ok', 'Reserva de espacio eliminada');
        } catch (\Throwable $e) {
            return back()->withErrors('No se puede eliminar: tiene registros relacionados.');
        }
    }
}
