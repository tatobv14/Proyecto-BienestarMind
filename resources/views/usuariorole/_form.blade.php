@php
    $val = fn($key, $default = '') => old($key, isset($usuariorole) ? ($usuariorole->{$key} ?? $default) : $default);
@endphp

<div class="space-y-4">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-medium mb-1">Usuario</label>
            <select name="Id_Usuario" class="w-full border rounded px-3 py-2" required>
                <option value="">Seleccione un usuario</option>
                @foreach($usuario as $usu)
                    <option value="{{ $usu->Id_Usuario }}"
                        {{ $val('Id_Usuario') == $usu->Id_Usuario ? 'selected' : '' }}>                        
                        [{{ $usu->Id_Usuario }}]
                        {{ $usu->Nombres }} 
                        {{ $usu->Apellidos }} 
                    </option>
                @endforeach
            </select>
            @error('Id_Usuario')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Rol</label>
            <select name="Id_Rol" class="w-full border rounded px-3 py-2" required>
                <option value="">Seleccione un rol</option>
                @foreach($role as $roles)
                    <option value="{{ $roles->Id_Rol }}"
                        {{ $val('Id_Usuario') == $roles->Id_Rol ? 'selected' : '' }}>                        
                        [{{ $roles->Id_Rol }}]
                        {{ $roles->Descripcion }} 
                    </option>
                @endforeach
            </select>
            @error('Id_Rol')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

    </div>
</div>