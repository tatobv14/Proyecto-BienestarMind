@php
    // Para edición, $sede llega definido; en creación es null.
    $val = fn($key, $default = '') => old($key, isset($sede) ? ($sede->{$key} ?? $default) : $default);
@endphp

<div class="space-y-4">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-medium mb-1">Nombre sede</label>
            <input type="text" name="Nombre_sede" value="{{ $val('Nombre_sede') }}"
                   class="w-full border rounded px-3 py-2" required>
            @error('Nombre sede')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Direccion sede</label>
            <input type="text" name="Direccion_sede" value="{{ $val('Direccion_sede') }}"
                   class="w-full border rounded px-3 py-2" required>
            @error('Direccion sede')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Telefono sede</label>
            <input type="text" name="Telefono_sede" value="{{ $val('Telefono_sede', '+57') }}"
                   class="w-full border rounded px-3 py-2" required
                   placeholder="+57XXXXXXXXXX" pattern="^\+57\d{10}$"
                   title="Debe comenzar con +57 y tener 10 dígitos">
            @error('Telefono sede')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

    </div>
</div>