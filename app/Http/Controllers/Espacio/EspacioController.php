<?php

namespace App\Http\Controllers\Espacio;

use App\Http\Controllers\Controller;
use App\Models\Espacio;
use App\Models\Sede;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEspacioRequest;
use App\Http\Requests\UpdateEspacioRequest;
class EspacioController extends Controller
{

    public function index()
    {
        $espacio = Espacio::all();
        return view('espacio.index', compact('espacio'));
    }

    public function create()
    {
        $sede = Sede::all();
        return view(
            'espacio.create',
            [
                'espacio' => new Espacio(),
                'sede' => $sede

            ]
        );
    }

    public function store(StoreEspacioRequest $request)
    {
        Espacio::create($request->validated());
        return redirect()->route('espacio.index')->with('ok', 'Espacio creado');
    }

    public function show(Espacio $espacio)
    {
        return view('espacio.show', compact('espacio'));
    }

    public function edit(Espacio $espacio)
    {
        $sede = Sede::all();
        return view(
            'espacio.edit',
            [
                'espacio' => $espacio,
                'sede' => $sede

            ]
        );
    }

    public function update(UpdateEspacioRequest $request, Espacio $espacio)
    {
        $espacio->update($request->validated());
        return redirect()->route('espacio.index')->with('ok', 'Espacio actualizado');
    }

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
