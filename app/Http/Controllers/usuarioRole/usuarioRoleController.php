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
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuariorole = usuariorole::all();
        return view('usuariorole.index',compact('usuariorole'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    $usuarios = Usuario::all(); // Trae todos los usuarios de la tabla
    $roles = Role::all();       // Trae todos los roles de la tabla
    $usuariorole = new UsuarioRole(); // Para mantener compatibilidad con el formulario

    return view('usuariorole.create', [
        'usuario_roles' => $usuariorole,
        'Id_Usuario' => $usuarios,
        'Id_Rol' => $roles,
    ]);
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUsuarioRoleRequest $request)
    {
        UsuarioRole::create($request->validated());        
        return redirect()->route('usuariorole.index')->with('ok','Usuario Rol creado');
    }

    /**
     * Display the specified resource.
     */
    public function show(UsuarioRole $usuariorole)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UsuarioRole $usuariorole)
    {
      $usuarios = Usuario::all(); // o el modelo que uses para usuarios
        $roles = Role::all(); 

    return view('usuariorole.edit', [
            'usuariorole' => $usuariorole,
            'Id_Usuario' => $usuarios,
            'Id_Rol' => $roles,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUsuarioRoleRequest $request, UsuarioRole $usuariorole)
    {
       $usuariorole->update($request->validated());
        return redirect()->route('usuariorole.index')->with('ok','Usuario Rol actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
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
