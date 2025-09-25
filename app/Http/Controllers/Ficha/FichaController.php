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

    public function index()
    {
        $ficha = Ficha::all();
        return view('ficha.index', compact('ficha'));
    }

    public function create()
    {
<<<<<<< HEAD
        $programa = Programa::all();
        return view(
            'ficha.create',
            [
                'ficha' => new Ficha(),
                'programa' => $programa
            ]
        );
=======
        $programas = Programa::all();
         return view('ficha.create', [
     'ficha' => new ficha(), // o el modelo existente en edit()
     'programas' => $programas
]);
>>>>>>> 5873a14450602c59ee5da4053161fb606b77a90f
    }

    public function store(StoreFichaRequest $request)
    {
<<<<<<< HEAD
        Ficha::create($request->validated());
        return redirect()->route('ficha.index')->with('ok', 'Ficha creada');
=======
         Ficha::create($request->validated());
         return to_route('ficha.index')->with('ok', 'Ficha creada exitosamente!');
>>>>>>> 5873a14450602c59ee5da4053161fb606b77a90f
    }

    public function show(Ficha $ficha)
    {
<<<<<<< HEAD
        return view('ficha.show', compact('ficha'));
=======
         return view('ficha.show', compact('ficha'));
>>>>>>> 5873a14450602c59ee5da4053161fb606b77a90f
    }

    public function edit(Ficha $ficha)
    {
<<<<<<< HEAD
        $programa = Programa::all();
        return view(
            'ficha.edit',
            [
                'ficha' => $ficha,
                'programa' => $programa
            ]
        );
=======
        return view('ficha.edit', [
    'ficha' => $ficha // o el modelo existente en edit()
]);
>>>>>>> 5873a14450602c59ee5da4053161fb606b77a90f
    }

    public function update(UpdateFichaRequest $request, Ficha $ficha)
<<<<<<< HEAD
    {
        $ficha->update($request->validated());
        return redirect()->route('ficha.index')->with('ok', 'Ficha actualizada');
=======
    { 
    $ficha->update($request->validated());
        return redirect()->route('ficha.index')->with('ok', 'ficha actualizada');
>>>>>>> 5873a14450602c59ee5da4053161fb606b77a90f
    }

    public function destroy(Ficha $ficha)
    {
        try {
            $ficha->delete();
<<<<<<< HEAD
            return back()->with('ok', 'Ficha eliminada');
=======
            return back()->with('ok', 'ficha eliminada');
>>>>>>> 5873a14450602c59ee5da4053161fb606b77a90f
        } catch (\Throwable $e) {
            return back()->withErrors('No se puede eliminar: tiene registros relacionados.');
        }
    }
}
