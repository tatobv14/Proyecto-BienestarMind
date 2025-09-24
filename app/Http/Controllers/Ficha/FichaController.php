<?php

namespace App\Http\Controllers\Ficha;

use App\Http\Controllers\Controller;
use App\Models\Ficha;
use App\Models\Programa;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFichaRequest;
use App\Http\Requests\UpdateFichaRequest;


class FichaController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ficha = Ficha::all();
        return view('ficha.index',compact('ficha'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $programas = Programa::all();
         return view('ficha.create', [
     'ficha' => new ficha(), // o el modelo existente en edit()
     'programas' => $programas
]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFichaRequest $request)
    {
         Ficha::create($request->validated());
         return to_route('ficha.index')->with('ok', 'Ficha creada exitosamente!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ficha $ficha)
    {
         return view('ficha.show', compact('ficha'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ficha $ficha)
    {
        return view('ficha.edit', [
    'ficha' => $ficha // o el modelo existente en edit()
]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFichaRequest $request, Ficha $ficha)
    { 
    $ficha->update($request->validated());
        return redirect()->route('ficha.index')->with('ok', 'ficha actualizada');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ficha $ficha)
    {
        try {
            $ficha->delete();
            return back()->with('ok', 'ficha eliminada');
        } catch (\Throwable $e) {
            return back()->withErrors('No se puede eliminar: tiene registros relacionados.');
        }
    }
}
