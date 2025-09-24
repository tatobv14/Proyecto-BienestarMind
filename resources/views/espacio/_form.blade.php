@php
    // Para edición, $espacio llega definido; en creación es null.
    $val = fn($key, $default = '') => old($key, isset($espacio) ? ($espacio->{$key} ?? $default) : $default);
@endphp

<div class="space-y-4">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-medium mb-1">ID Espacio</label>
            <input type="text" name="Id_Espacio" value="{{ $val('Id_Espacio') }}"
                   class="w-full border rounded px-3 py-2" required>
            @error('ID Espacio')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Sede</label>
            <input type="text" name="Id_Sede" value="{{ $val('Id_Sede') }}"
                   class="w-full border rounded px-3 py-2" required>
            @error('Sede')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Espacio</label>
            <input type="text" name="Nombre_del_espacio" value="{{ $val('Nombre_del_espacio') }}"
                   class="w-full border rounded px-3 py-2" required>
            @error('Espacio')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        

        <div>
            <label class="block text-sm font-medium mb-1">Fecha </label>
            <input type="date" name="Fecha_de_Nacimiento" value="{{ \Carbon\Carbon::parse($val('Fecha_de_Nacimiento'))->format('Y-m-d') }}"
                   class="w-full border rounded px-3 py-2" required>
            @error('Fecha')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

    

    </div>
</div>