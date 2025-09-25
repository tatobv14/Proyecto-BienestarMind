<?php

namespace App\Http\Controllers\RolesPermiso;

use App\Http\Controllers\Controller;
use App\Models\RolesPermiso;
use App\Models\Permiso;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRolesPermisoRequest;
use App\Http\Requests\UpdateRolesPermisoRequest;
class RolesPermisoController
{

    public function index()
    {
        $rolespermiso = RolesPermiso::all();
        return view('rolespermiso.index', compact('rolespermiso'));
    }

    public function create()
    {
        $permiso = Permiso::all();
        $role = Role::all();
        return view(
            'rolespermiso.create',
            [
                'rolespermiso' => new RolesPermiso(),
                'permiso' => $permiso,
                'role' => $role
            ]
        );
    }

    public function store(StoreRolesPermisoRequest $request)
    {
        RolesPermiso::create($request->validated());
        return redirect()->route('rolespermiso.index')->with('ok', 'Rol permiso creado');
    }

    public function show(RolesPermiso $rolespermiso)
    {
        return view('rolespermiso.show', compact('rolespermiso'));
    }

    public function edit(RolesPermiso $rolespermiso)
    {
        $permiso = Permiso::all();
        $role = Role::all();
        return view(
            'rolespermiso.edit',
            [
                'rolespermiso' => $rolespermiso,
                'permiso' => $permiso,
                'role' => $role
            ]
        );
    }

    public function update(UpdateRolesPermisoRequest $request, RolesPermiso $rolespermiso)
    {
        $rolespermiso->update($request->validated());
        return redirect()->route('rolespermiso.index')->with('ok', 'Rol permiso actualizado');
    }

    public function destroy(RolesPermiso $rolespermiso)
    {
        try {
            $rolespermiso->delete();
            return back()->with('ok', 'Rol permiso eliminado');
        } catch (\Throwable $e) {
            return back()->withErrors('No se puede eliminar: tiene registros relacionados.');
        }
    }
}
