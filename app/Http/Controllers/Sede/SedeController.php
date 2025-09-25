<?php

namespace App\Http\Controllers\Sede;

use App\Http\Controllers\Controller;
use App\Models\Sede;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSedeRequest;
use App\Http\Requests\UpdateSedeRequest;
class SedeController
{

    public function index()
    {
        $sede = Sede::all();
        return view('sede.index', compact('sede'));
    }

    public function create()
    {
        return view(
            'sede.create',
            [
                'sede' => new Sede()
            ]
        );
    }

    public function store(StoreSedeRequest $request)
    {
        Sede::create($request->validated());
        return redirect()->route('sede.index')->with('ok', 'Sede creada');
    }

    public function show(Sede $sede)
    {
        return view('sede.show', compact('sede'));
    }

    public function edit(Sede $sede)
    {
        return view(
            'sede.edit',
            [
                'sede' => $sede
            ]
        );
    }

    public function update(UpdateSedeRequest $request, Sede $sede)
    {
        $sede->update($request->validated());
        return redirect()->route('sede.index')->with('ok', 'Sede actualizada');
    }

    public function destroy(Sede $sede)
    {
        try {
            $sede->delete();
            return back()->with('ok', 'Sede eliminada');
        } catch (\Throwable $e) {
            return back()->withErrors('No se puede eliminar: tiene registros relacionados.');
        }
    }
}
