<?php

namespace App\Http\Controllers\usuarioRole;

use App\Http\Controllers\Controller;
use App\Models\UsuarioRole;
use App\Models\Usuario;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUsuarioRoleRequest;
use App\Http\Requests\UpdateUsuarioRoleRequest;
class usuarioRoleController extends Controller
{

    public function index()
    {
        $usuariorole = usuariorole::all();
        return view('usuariorole.index', compact('usuariorole'));
    }

    public function create()
    {
        $usuarios = Usuario::all(); 
        $roles = Role::all();               

        return view('usuariorole.create', [
            'usuariorole' => new UsuarioRole(),
            'usuario' => $usuarios,
            'role' => $roles,
        ]);
    }

    public function store(StoreUsuarioRoleRequest $request)
    {
        UsuarioRole::create($request->validated());
        return redirect()->route('usuariorole.index')->with('ok', 'Usuario Rol creado');
    }

    public function show(UsuarioRole $usuariorole)
    {
        return view('usuariorole.show', compact('usuariorole'));
    }

    public function edit(UsuarioRole $usuariorole)
    {
        $usuarios = Usuario::all(); 
        $roles = Role::all();

        return view('usuariorole.edit', [
            'usuariorole' => $usuariorole,
            'usuario' => $usuarios,
            'role' => $roles,
        ]);
    }

    public function update(UpdateUsuarioRoleRequest $request, UsuarioRole $usuariorole)
    {
        $usuariorole->update($request->validated());
        return redirect()->route('usuariorole.index')->with('ok', 'Usuario Rol actualizado');
    }

    public function destroy(UsuarioRole $usuariorole)
    {
        try {
            $usuariorole->delete();
            return back()->with('ok', 'Usuario Rol eliminado');
        } catch (\Throwable $e) {
            // Suele fallar si hay FKs (p.ej. dependientes) sin cascade
            return back()->withErrors('No se puede eliminar: tiene registros relacionados.');
        }
    }
}
