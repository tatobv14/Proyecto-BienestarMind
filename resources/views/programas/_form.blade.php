@php
    // Para edición, $programas llega definido; en creación es null.
    $val = fn($key, $default = '') => old($key, isset($programas) ? ($programas->{$key} ?? $default) : $default);
@endphp

<div class="space-y-4">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-medium mb-1">Nombre_programa</label>
            <input type="text" name="nombre" value="{{ $val('nombre') }}"
                   class="w-full border rounded px-3 py-2" required>
            @error('nombre')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Descripcion</label>
            <input type="text" name="descripcion" value="{{ $val('descripcion') }}"
                   class="w-full border rounded px-3 py-2" required>
            @error('descripcion')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

    </div>
</div>
