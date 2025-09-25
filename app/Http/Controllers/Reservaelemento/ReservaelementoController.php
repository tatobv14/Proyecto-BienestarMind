<?php

namespace App\Http\Controllers\Reservaelemento;

use App\Http\Controllers\Controller;
use App\Models\Ficha;
use App\Models\Reservaelemento;
use App\Models\Usuario;
use App\Models\Elemento;
use Illuminate\Http\Request;
use App\Http\Requests\StoreReservaelementoRequest;
use App\Http\Requests\UpdateReservaelementoRequest;
class ReservaelementoController
{

    public function index()
    {
        $reservaelemento = Reservaelemento::all();
        return view('reservaelemento.index', compact('reservaelemento'));
    }

    public function create()
    {
        $ficha = Ficha::all();
        $usuario = Usuario::all();
        $elemento = Elemento::all();

        return view(
            'reservaelemento.create',
            [
                'reservaelemento' => new Reservaelemento(),
                'ficha' => $ficha,
                'usuario' => $usuario,
                'elemento' => $elemento
            ]
        );
    }

    public function store(StoreReservaelementoRequest $request)
    {
        Reservaelemento::create($request->validated());
        return redirect()->route('reservaelemento.index')->with('ok', 'Reserva de elemento creada');
    }

    public function show(Reservaelemento $reservaelemento)
    {
        return view('reservaelemento.show', compact('reservaelemento'));
    }

    public function edit(Reservaelemento $reservaelemento)
    {
        $ficha = Ficha::all();
        $usuario = Usuario::all();
        $elemento = Elemento::all();

        return view(
            'reservaelemento.edit',
            [
                'reservaelemento' => $reservaelemento,
                'ficha' => $ficha,
                'usuario' => $usuario,
                'elemento' => $elemento
            ]
        );
    }

    public function update(UpdateReservaelementoRequest $request, Reservaelemento $reservaelemento)
    {
        $reservaelemento->update($request->validated());
        return redirect()->route('reservaelemento.index')->with('ok', 'Reserva de elemento actualizada');
    }

    public function destroy(Reservaelemento $reservaelemento)
    {
        try {
            $reservaelemento->delete();
            return back()->with('ok', 'Reserva de elemento eliminada');
        } catch (\Throwable $e) {
            return back()->withErrors('No se puede eliminar: tiene registros relacionados.');
        }
    }
}
