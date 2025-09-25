<?php

namespace App\Http\Controllers\Programa;

use App\Http\Controllers\Controller;
use App\Models\Programa;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProgramaRequest;
use App\Http\Requests\UpdateProgramaRequest;

class ProgramaController extends Controller
{
    public function index()
    {
        $programas = Programa::all();
        return view('programas.index', compact('programas'));
    }

    public function create()
    {
        return view('programas.create', [
            'programa' => new Programa()
        ]);
    }

    public function store(StoreProgramaRequest $request)
    {
        Programa::create($request->validated());
        return redirect()->route('programas.index')->with('ok', 'Programa creado');
    }

    public function show(Programa $programa)
    {
        return view('programas.show', compact('programa'));
    }

    public function edit(Programa $programa)
    {
        return view('programas.edit', [
            'programa' => $programa
        ]);
    }

    public function update(UpdateProgramaRequest $request, Programa $programa)
    {
        $programa->update($request->validated());
        return redirect()->route('programas.index')->with('ok', 'Programa actualizado');
    }

    public function destroy(Programa $programa)
    {
        try {
            $programa->delete();
            return back()->with('ok', 'Programa eliminado');
        } catch (\Throwable $e) {
            return back()->withErrors('No se puede eliminar: tiene registros relacionados.');
        }
    }
}
