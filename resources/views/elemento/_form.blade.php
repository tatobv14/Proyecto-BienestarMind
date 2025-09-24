@php
    // Para edición, $elemento llega definido; en creación es null.
    $val = fn($key, $default = '') => old($key, isset($elemento) ? ($elemento->{$key} ?? $default) : $default);
@endphp

<div class="space-y-4">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-medium mb-1">Categoria</label>
            <input type="text" name="Id_Categoria" value="{{ $val('Id_Categoria') }}"
                   class="w-full border rounded px-3 py-2" required>
            @error('Categoria')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Nombre Elemento</label>
            <input type="text" name="Nombre_Elemento" value="{{ $val('Nombre_Elemento') }}"
                   class="w-full border rounded px-3 py-2" required>
            @error('Nombre Elemento')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Estado Elemento</label>
            <input type="text" name="Estado_Elemento" value="{{ $val('Estado_Elemento') }}"
                   class="w-full border rounded px-3 py-2" required>
            @error('Estado Elemento')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        

        <div>
            <label class="block text-sm font-medium mb-1">Fecha de Nacimiento</label>
            <input type="date" name="Fecha_de_Nacimiento" value="{{ \Carbon\Carbon::parse($val('Fecha_de_Nacimiento'))->format('Y-m-d') }}"
                   class="w-full border rounded px-3 py-2" required>
            @error('Fecha_de_Nacimiento')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

    

        
    </div>
</div>