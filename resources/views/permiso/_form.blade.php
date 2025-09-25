@php
    // Para edición, $asesorium llega definido; en creación es una instancia vacía.
    $val = fn($key, $default = '') => old($key, $permiso->{$key} ?? $default);
@endphp

<div class="space-y-4">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-medium mb-1">Descripción del permiso</label>
            <input type="text" name="Descripcion" value="{{ $val('Descripcion') }}"
                   class="w-full border rounded px-3 py-2">
            @error('Descripcion')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>    
    </div>
</div>