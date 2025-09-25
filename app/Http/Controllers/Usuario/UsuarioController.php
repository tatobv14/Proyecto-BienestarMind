<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;

class UsuarioController extends Controller
{

    public function index()
    {
        $usuarios = Usuario::all();
        return view('usuario.index', compact('usuarios'));
    }

    public function create()
    {
        return view(
            'usuario.create',
            [
                'usuario' => new Usuario()
            ]
        );
    }

    public function store(StoreUsuarioRequest $request)
    {
        Usuario::create($request->validated());
        return redirect()->route('usuario.index')->with('ok', 'Usuario creado');

    }

    public function show(Usuario $usuario)
    {
        return view('usuario.show', compact('usuario'));
    }

    public function edit(Usuario $usuario)
    {
        return view(
            'usuario.edit',
            [
                'usuario' => $usuario
            ]
        );
    }

    public function update(UpdateUsuarioRequest $request, Usuario $usuario)
    {
        $usuario->update($request->validated());
        return redirect()->route('usuario.index')->with('ok', 'Usuario actualizado');
    }

    public function destroy(Usuario $usuario)
    {
        try {
            $usuario->delete();
            return back()->with('ok', 'Usuario eliminado');
        } catch (\Throwable $e) {
            // Suele fallar si hay FKs (p.ej. dependientes) sin cascade
            return back()->withErrors('No se puede eliminar: tiene registros relacionados.');
        }
    }
}
