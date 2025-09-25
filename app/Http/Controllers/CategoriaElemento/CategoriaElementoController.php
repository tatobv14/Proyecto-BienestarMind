<?php

namespace App\Http\Controllers\CategoriaElemento;

use App\Http\Controllers\Controller;
use App\Models\CategoriaElemento;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategoriaElementoRequest;
use App\Http\Requests\UpdateCategoriaElementoRequest;

class CategoriaElementoController extends Controller
{
    public function index()
    {
        $categoriaelementos = CategoriaElemento::all();
        return view("categoriaelemento.index", compact("categoriaelementos"));
    }

    public function create()
    {
        return view('categoriaelemento.create', [
            'categoriaelemento' => new CategoriaElemento()
        ]);
    }

    public function store(StoreCategoriaElementoRequest $request)
    {
        CategoriaElemento::create($request->validated());
        return redirect()->route('categoriaelemento.index')->with('ok', 'Categoria de Elemento creada');
    }

    public function show(CategoriaElemento $categoriaelemento)
    {
        return view('categoriaelemento.show', compact('categoriaelemento'));
    }

    public function edit(CategoriaElemento $categoriaelemento)
    {
        return view('categoriaelemento.edit', [
            'categoriaelemento' => $categoriaelemento
        ]);
    }

    public function update(UpdateCategoriaElementoRequest $request, CategoriaElemento $categoriaelemento)
    {
        $categoriaelemento->update($request->validated());
        return redirect()->route('categoriaelemento.index')->with('ok', 'Categora del elemento actualizada');
    }

    public function destroy(CategoriaElemento $categoriaelemento)
    {
        try {
            $categoriaelemento->delete();
            return back()->with('ok', 'Categoría eliminada');
        } catch (\Throwable $e) {
            return back()->withErrors('No se puede eliminar: tiene registros relacionados.');
        }
    }
}