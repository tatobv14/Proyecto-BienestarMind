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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRolesPermisoRequest $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRolesPermisoRequest $request, RolesPermiso $rolesPermiso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RolesPermiso $rolesPermiso)
    {
        //
    }
}
