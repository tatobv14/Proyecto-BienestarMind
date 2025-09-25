<?php

namespace App\Http\Controllers\Elemento;

use App\Http\Controllers\Controller;
use App\Models\Elemento;
use App\Models\CategoriaElemento;
use Illuminate\Http\Request;
use App\Http\Requests\StoreElementoRequest;
use App\Http\Requests\UpdateElementoRequest;

class ElementoController extends Controller
{

    public function index()
    {
        $elementos = Elemento::all();
        return view("elemento.index", compact("elementos"));
    }

    public function create()
    {
        $categoria = CategoriaElemento::all();
        return view(
            'elemento.create',
            [
                'elemento' => new Elemento(),
                'categoria' => $categoria
            ]
        );
    }

    public function store(StoreElementoRequest $request)
    {
        Elemento::create($request->validated());
        return redirect()->route('elemento.index')->with('ok', 'Elemento creado');
    }

    public function show(Elemento $elemento)
    {
        return view('elemento.show', compact('elemento'));
    }

    public function edit(Elemento $elemento)
    {
        $categoria = CategoriaElemento::all();
        return view(
            'elemento.edit',
            [
                'elemento' => $elemento,
                'categoria' => $categoria
            ]
        );
    }

    public function update(UpdateElementoRequest $request, Elemento $elemento)
    {
        $elemento->update($request->validated());
        return redirect()->route('elemento.index')->with('ok', 'Elemento actualizado');
    }

    public function destroy(Elemento $elemento)
    {
        try {
            $elemento->delete();
            return back()->with('ok', 'Elemento eliminado');
        } catch (\Throwable $e) {
            // Suele fallar si hay FKs (p.ej. dependientes) sin cascade
            return back()->withErrors('No se puede eliminar: tiene registros relacionados.');
        }
    }
}
