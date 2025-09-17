<?php

namespace App\Http\Controllers\Elemento;

use App\Http\Controllers\Controller;
use App\Models\Elemento;
use Illuminate\Http\Request;

class ElementoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $elementos = Elemento::all();
        return view("elemento.index", compact("elementos"));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Elemento $elemento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Elemento $elemento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Elemento $elemento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Elemento $elemento)
    {
        //
    }
}
