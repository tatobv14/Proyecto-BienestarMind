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
<<<<<<< HEAD
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
=======
        $Id_Rol = null; // Asignar un valor predeterminado o el valor que corresponda
        $Id_Permiso = null;
        $rolespermiso = new RolesPermiso();
        return view('rolespermiso.create',
        [
            
            'Id_Rol' => $Id_Rol,
            'Id_Permiso' => $Id_Permiso,
            
        ]); 
>>>>>>> 5873a14450602c59ee5da4053161fb606b77a90f
    }

    public function store(StoreRolesPermisoRequest $request)
    {
<<<<<<< HEAD
        RolesPermiso::create($request->validated());
        return redirect()->route('rolespermiso.index')->with('ok', 'Rol permiso creado');
=======
         RolesPermiso::create($request->validated());        
        return redirect()->route('rolespermiso.index')->with('ok','roles permiso creado');
>>>>>>> 5873a14450602c59ee5da4053161fb606b77a90f
    }

    public function show(RolesPermiso $rolespermiso)
    {
        return view('rolespermiso.show', compact('rolespermiso'));
    }

    public function edit(RolesPermiso $rolespermiso)
    {
<<<<<<< HEAD
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
=======
        $Id_Rol = null; // Asignar un valor predeterminado o el valor que corresponda
        $Id_Permiso = null;
        $rolespermiso = new RolesPermiso();
        return view('rolespermiso.create',
        [
            'roles_permisos' => $roles_permisos,
            'Id_Rol' => $Id_Rol,
            'Id_Permiso' => $Id_Permiso,
            
        ]); 
>>>>>>> 5873a14450602c59ee5da4053161fb606b77a90f
    }

    public function update(UpdateRolesPermisoRequest $request, RolesPermiso $rolespermiso)
    {
        $rolespermiso->update($request->validated());
<<<<<<< HEAD
        return redirect()->route('rolespermiso.index')->with('ok', 'Rol permiso actualizado');
=======
        return redirect()->route('rolespermiso.index')->with('ok','roles permiso actualizado');
>>>>>>> 5873a14450602c59ee5da4053161fb606b77a90f
    }

    public function destroy(RolesPermiso $rolespermiso)
    {
<<<<<<< HEAD
        try {
            $rolespermiso->delete();
            return back()->with('ok', 'Rol permiso eliminado');
        } catch (\Throwable $e) {
            return back()->withErrors('No se puede eliminar: tiene registros relacionados.');
        }
=======
         try {
                $rolespermiso->delete(); 
                return back()->with('ok', 'roles permiso eliminado');
            } catch (\Throwable $e) {
                // Suele fallar si hay FKs (p.ej. dependientes) sin cascade
                return back()->withErrors('No se puede eliminar: tiene registros relacionados.');
            }
>>>>>>> 5873a14450602c59ee5da4053161fb606b77a90f
    }
}
