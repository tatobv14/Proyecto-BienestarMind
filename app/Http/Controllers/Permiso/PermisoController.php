<?php

namespace App\Http\Controllers\Permiso;

use App\Http\Controllers\Controller;
use App\Models\Permiso;
use Illuminate\Http\Request;
use App\Http\Requests\StorePermisoRequest;
use App\Http\Requests\UpdatePermisoRequest;
class PermisoController
{

    public function index()
    {
        $permiso = Permiso::all();
        return view('permiso.index', compact('permiso'));
    }

    public function create()
    {
        return view(
            'permiso.create',
            [
                'permiso' => new Permiso()
            ]
        );
    }

    public function store(StorePermisoRequest $request)
    {
        Permiso::create($request->validated());
        return redirect()->route('permiso.index')->with('ok', 'Permiso creado');
    }

    public function show(Permiso $permiso)
    {
        return view('permiso.show', compact('permiso'));
    }

    public function edit(Permiso $permiso)
    {
        return view(
            'permiso.edit',
            [
                'permiso' => $permiso
            ]
        );
    }

    public function update(UpdatePermisoRequest $request, Permiso $permiso)
    {
        $permiso->update($request->validated());
        return redirect()->route('permiso.index')->with('ok', 'Permiso actualizado');
    }

    public function destroy(Permiso $permiso)
    {
        try {
            $permiso->delete();
            return back()->with('ok', 'Permiso eliminado');
        } catch (\Throwable $e) {
            return back()->withErrors('No se puede eliminar: tiene registros relacionados.');
        }
    }
}
