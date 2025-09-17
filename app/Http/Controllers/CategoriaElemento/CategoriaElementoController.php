<?php

namespace App\Http\Controllers\CategoriaElemento;

use App\Http\Controllers\Controller;
use App\Models\CategoriaElemento;
use Illuminate\Http\Request;

class CategoriaElementoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoriaelementos = CategoriaElemento::all();
        return view("categoriaelementos.index", compact("categoriaelementos"));
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
    public function show(CategoriaElemento $categoriaElemento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CategoriaElemento $categoriaElemento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CategoriaElemento $categoriaElemento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CategoriaElemento $categoriaElemento)
    {
        //
    }
}
