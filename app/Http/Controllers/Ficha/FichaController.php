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
        $programa = Programa::all();
        return view(
            'ficha.create',
            [
                'ficha' => new Ficha(),
                'programa' => $programa
            ]
        );
    }

    public function store(StoreFichaRequest $request)
    {
        Ficha::create($request->validated());
        return redirect()->route('ficha.index')->with('ok', 'Ficha creada');
    }

    public function show(Ficha $ficha)
    {
        return view('ficha.show', compact('ficha'));
    }

    public function edit(Ficha $ficha)
    {
        $programa = Programa::all();
        return view(
            'ficha.edit',
            [
                'ficha' => $ficha,
                'programa' => $programa
            ]
        );
    }

    public function update(UpdateFichaRequest $request, Ficha $ficha)
    {
        $ficha->update($request->validated());
        return redirect()->route('ficha.index')->with('ok', 'Ficha actualizada');
    }

    public function destroy(Ficha $ficha)
    {
        try {
            $ficha->delete();
            return back()->with('ok', 'Ficha eliminada');
        } catch (\Throwable $e) {
            return back()->withErrors('No se puede eliminar: tiene registros relacionados.');
        }
    }
}
