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
        return view('programas.create', ['programas' => null]);
    }

    public function store(StoreProgramaRequest $request)
    {
        //
    }

    public function show(Programa $programa)
    {
        //
    }

    public function edit(Programa $programa)
    {
        return view('programas.edit', ['programas' => $programa]);
    }

    public function update(UpdateProgramaRequest $request, Programa $programa)
    {
        //
    }

    public function destroy(Programa $programa)
    {
        //
    }
}
