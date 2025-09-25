<?php

namespace App\Http\Controllers\RolesPermiso;

use App\Http\Controllers\Controller;
use App\Models\RolesPermiso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRolesPermisoRequest;
use App\Http\Requests\UpdateRolesPermisoRequest;
class RolesPermisoController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rolespermiso = RolesPermiso::all();
        return view('rolespermiso.index',compact('rolespermiso'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Id_Rol = null; // Asignar un valor predeterminado o el valor que corresponda
        $Id_Permiso = null;
        $rolespermiso = new RolesPermiso();
        return view('rolespermiso.create',
        [
            
            'Id_Rol' => $Id_Rol,
            'Id_Permiso' => $Id_Permiso,
            
        ]); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRolesPermisoRequest $request)
    {
         RolesPermiso::create($request->validated());        
        return redirect()->route('rolespermiso.index')->with('ok','roles permiso creado');
    }

    /**
     * Display the specified resource.
     */
    public function show(RolesPermiso $rolesPermiso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RolesPermiso $rolesPermiso)
    {
        $Id_Rol = null; // Asignar un valor predeterminado o el valor que corresponda
        $Id_Permiso = null;
        $rolespermiso = new RolesPermiso();
        return view('rolespermiso.create',
        [
            'roles_permisos' => $roles_permisos,
            'Id_Rol' => $Id_Rol,
            'Id_Permiso' => $Id_Permiso,
            
        ]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRolesPermisoRequest $request, RolesPermiso $rolesPermiso)
    {
        $rolespermiso->update($request->validated());
        return redirect()->route('rolespermiso.index')->with('ok','roles permiso actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RolesPermiso $rolesPermiso)
    {
         try {
                $rolespermiso->delete(); 
                return back()->with('ok', 'roles permiso eliminado');
            } catch (\Throwable $e) {
                // Suele fallar si hay FKs (p.ej. dependientes) sin cascade
                return back()->withErrors('No se puede eliminar: tiene registros relacionados.');
            }
    }
}
