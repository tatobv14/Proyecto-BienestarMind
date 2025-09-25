<?php

namespace App\Http\Controllers\usuarioFicha;

use App\Http\Controllers\Controller;
use App\Models\UsuarioFicha;
use App\Models\Usuario;
use App\Models\Ficha;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUsuarioFichaRequest;
use App\Http\Requests\UpdateUsuarioFichaRequest;
class usuarioFichaController extends Controller
{

    public function index()
    {
        $usuarioficha = usuarioficha::all();
        return view('usuarioficha.index', compact('usuarioficha'));
    }

    public function create()
    {
        $usuario = Usuario::all();
        $ficha = Ficha::all();
        return view(
            'usuarioficha.create',
            [
                'usuarioficha' => new UsuarioFicha(),
                'usuario' => $usuario,
                'ficha' => $ficha
            ]
        );
    }

    public function store(StoreUsuarioFichaRequest $request)
    {
        UsuarioFicha::create($request->validated());
        return redirect()->route('usuarioficha.index')->with('ok', 'Usuario ficha creado');
    }

    public function show(UsuarioFicha $usuarioficha)
    {
        return view('usuarioficha.show', compact('usuarioficha'));
    }

    public function edit(UsuarioFicha $usuarioficha)
    {
        $usuario = Usuario::all();
        $ficha = Ficha::all();
        return view(
            'usuarioficha.edit',
            [
                'usuarioficha' => $usuarioficha,
                'usuario' => $usuario,
                'ficha' => $ficha
            ]
        );
    }

    public function update(UpdateUsuarioFichaRequest $request, UsuarioFicha $usuarioficha)
    {
        $usuarioficha->update($request->validated());
        return redirect()->route('usuarioficha.index')->with('ok', 'Usuario ficha actualizado');
    }

    public function destroy(UsuarioFicha $usuarioficha)
    {
        try {
            $usuarioficha->delete();
            return back()->with('ok', 'Usuario ficha eliminada');
        } catch (\Throwable $e) {
            return back()->withErrors('No se puede eliminar: tiene registros relacionados.');
        }
    }
}
