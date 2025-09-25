@php
    // Para edición, $asesorium llega definido; en creación es una instancia vacía.
    $val = fn($key, $default = '') => old($key, $sede->{$key} ?? $default);
@endphp

<div class="space-y-4">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-medium mb-1">Nombre de la sede</label>
            <input type="text" name="Nombre_sede" value="{{ $val('Nombre_sede') }}"
                class="w-full border rounded px-3 py-2">
            @error('Nombre_sede')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Télefono de la sede</label>
            <input type="text" name="Telefono_sede" value="{{ $val('Telefono_sede') }}"
                class="w-full border rounded px-3 py-2">
            @error('Telefono_sede')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Dirección de la sede</label>
            <input type="text" name="Direccion_sede" value="{{ $val('Direccion_sede') }}"
                class="w-full border rounded px-3 py-2">
            @error('Direccion_sede')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

    </div>
</div>