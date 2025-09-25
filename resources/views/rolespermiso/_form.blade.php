@php
    // Para edición, $asesorium llega definido; en creación es una instancia vacía.
    $val = fn($key, $default = '') => old($key, $rolespermiso->{$key} ?? $default);
@endphp

<div class="space-y-4">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-medium mb-1">Rol</label>
            <select name="Id_Rol" class="w-full border rounded px-3 py-2" required>
                <option value="" >Seleccione un rol</option>
                @foreach ($role as $rol)
                    <option value="{{ $rol->Id_Rol }}" {{ $val('Id_Rol') == $rol->Id_Rol ? 'selected' : '' }}>
                        [{{ $rol->Id_Rol }}]
                        {{ $rol->Descripcion }}
                    </option>
                @endforeach
            </select>
            @error('Id_Rol')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>


        <div>
            <label class="block text-sm font-medium mb-1">Permiso</label>
            <select name="Id_Permiso" class="w-full border rounded px-3 py-2" required>
                <option value="">Seleccione un permiso</option>
                @foreach ($permiso as $per)
                    <option value="{{ $per->Id_Permiso }}" {{ $val('Id_Permiso') == $per->Id_Permiso ? 'selected' : '' }}>
                        [{{ $per->Id_Permiso }}]
                        {{ $per->Descripcion }}
                    </option>
                @endforeach
            </select>
            @error('Id_Permiso')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

    </div>
</div>