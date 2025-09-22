<?php

namespace App\Http\Controllers\usuarioFicha;

use App\Http\Controllers\Controller;
use App\Models\UsuarioFicha;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUsuarioFichaRequest;
use App\Http\Requests\UpdateUsuarioFichaRequest;
class usuarioFichaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarioficha = usuarioficha::all();
        return view('usuarioficha.index',compact('usuarioficha'));
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
    public function store(StoreUsuarioFichaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UsuarioFicha $usuarioFicha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UsuarioFicha $usuarioFicha)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUsuarioFichaRequest $request, UsuarioFicha $usuarioFicha)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UsuarioFicha $usuarioFicha)
    {
        //
    }
}
