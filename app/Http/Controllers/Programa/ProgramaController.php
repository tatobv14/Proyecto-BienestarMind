<?php

namespace App\Http\Controllers\Programa;

use App\Models\Programa;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProgramaRequest;
use App\Http\Requests\UpdateProgramaRequest;
class ProgramaController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programa = Programa::all();
        return view('programas.index',compact('programa'));
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
    public function store(StoreProgramaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Programa $programa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Programa $programa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProgramaRequest $request, Programa $programa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Programa $programa)
    {
        //
    }
}
