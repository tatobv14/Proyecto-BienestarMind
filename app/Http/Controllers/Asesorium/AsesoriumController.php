<?php

namespace App\Http\Controllers\Asesorium;

use App\Http\Controllers\Controller;
use App\Models\Asesorium;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAsesoriumRequest;
use App\Http\Requests\UpdateAsesoriumRequest;

class AsesoriumController extends Controller
{
    public function index()
    {
        $asesoriums = Asesorium::all();
        return view("asesorium.index", compact("asesoriums"));
    }

    public function create()
    {
        return view('asesorium.create', [
    'asesorium' => new Asesorium() // o el modelo existente en edit()
]);
    }

    public function store(StoreAsesoriumRequest $request)
    {
        Asesorium::create($request->validated());
        return redirect()->route('asesorium.index')->with('ok', 'Asesoría creada');
    }

    public function show(Asesorium $asesorium)
    {
        return view('asesorium.show', compact('asesorium'));
    }

    public function edit(Asesorium $asesorium)
    {
      return view('asesorium.create', [
    'asesorium' => new Asesorium() // o el modelo existente en edit()
]);
    }

    public function update(UpdateAsesoriumRequest $request, Asesorium $asesorium)
    {
        $asesorium->update($request->validated());
        return redirect()->route('asesorium.index')->with('ok', 'Asesoría actualizada');
    }

    public function destroy(Asesorium $asesorium)
    {
        try {
            $asesorium->delete();
            return back()->with('ok', 'Asesoría eliminada');
        } catch (\Throwable $e) {
            return back()->withErrors('No se puede eliminar: tiene registros relacionados.');
        }
    }
}