@php
    // Para edición, $rolespermiso llega definido; en creación es null.
    $val = fn($key, $default = '') => old($key, isset($rolespermiso) ? ($rolespermiso->{$key} ?? $default) : $default);
@endphp

<div class="space-y-4">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-medium mb-1">Id_Rol</label>
            <input type="text" name="Id_Rol" value="{{ $val('Id_Rol') }}"
                   class="w-full border rounded px-3 py-2" required>
            @error('Id_Rol')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Id_Permiso</label>
            <input type="text" name="Id_Permiso" value="{{ $val('Id_Permiso') }}"
                   class="w-full border rounded px-3 py-2" required>
            @error('Id_Permiso')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>


    </div>
</div>