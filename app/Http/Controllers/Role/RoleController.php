<?php

namespace App\Http\Controllers\Role;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
class RoleController
{

    public function index()
    {
        $role = Role::all();
        return view('role.index', compact('role'));
    }

    public function create()
    {
        return view(
            'role.create',
            [
                'role' => new Role()
            ]
        );
    }

    public function store(StoreRoleRequest $request)
    {
        Role::create($request->validated());
        return redirect()->route('role.index')->with('ok', 'Rol creado');
    }

    public function show(Role $role)
    {
        return view('role.show', compact('role'));
    }

    public function edit(Role $role)
    {
        return view(
            'role.edit',
            [
                'role' => $role
            ]
        );
    }

    public function update(UpdateRoleRequest $request, Role $role)
    {
        $role->update($request->validated());
        return redirect()->route('role.index')->with('ok', 'Rol actualizado');
    }

    public function destroy(Role $role)
    {
        try {
            $role->delete();
            return back()->with('ok', 'Rol eliminado');
        } catch (\Throwable $e) {
            return back()->withErrors('No se puede eliminar: tiene registros relacionados.');
        }
    }
}
