<?php

namespace App\Http\Controllers\Usuario;

use App\Http\Controllers\Controller;
use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
     {
        $usuarios = Usuario::all();
        return view('usuario.index',compact('usuarios'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUsuarioRequest $request)
    {
        Usuario::create($request->validated());        
        return redirect()->route('usuario.index')->with('ok','Usuario creado');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        $Nombres = null; // Asignar un valor predeterminado o el valor que corresponda
        $Apellidos = null;
        $Documento = null;
        $Correo = null;
        $Genero = null;
        $Telefono = null;
        $Fecha_de_Nacimiento = null;
        $Contraseña = null;
        $ficha_Id_ficha = null;
        $Id_Rol = null;
        return view('usuario.edit', 
        [
            'usuario' => $usuario,
            'Nombres' => $Nombres,
            'Apellidos' => $Apellidos,
            'Documento' => $Documento,
            'Correo' => $Correo,
            'Genero' => $Genero,
            'Telefono' => $Telefono,
            'Fecha_de_Nacimiento' => $Fecha_de_Nacimiento,
            'Contraseña' => $Contraseña,
            'ficha_Id_ficha' => $ficha_Id_ficha,
            'Id_Rol' => $Id_Rol
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUsuarioRequest $request, Usuario $usuario)
    {
        $usuario->update($request->validated());
        return redirect()->route('usuario.index')->with('ok','Usuario actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
           try {
                $usuario->delete(); 
                return back()->with('ok', 'Uusario eliminado');
            } catch (\Throwable $e) {
                // Suele fallar si hay FKs (p.ej. dependientes) sin cascade
                return back()->withErrors('No se puede eliminar: tiene registros relacionados.');
            }
    }
}
