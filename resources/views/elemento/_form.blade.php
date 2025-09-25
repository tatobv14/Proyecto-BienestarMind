@php
    // Para edición, $elemento llega definido; en creación es null.
    $val = fn($key, $default = '') => old($key, isset($elemento) ? ($elemento->{$key} ?? $default) : $default);
@endphp

<div class="space-y-4">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        
        <div>
            <label class="block text-sm font-medium mb-1">Categoría</label>
            <select name="Id_Categoria" class="w-full border rounded px-3 py-2" >
                <option value="">Seleccione una categoría</option>
                @foreach($categoria as $cat)
                    <option value="{{ $cat->Id_Categoria }}"
                        {{ $val('Id_Categoria') == $cat->Id_Categoria ? 'selected' : '' }}>                        
                        [{{ $cat->Id_Categoria }}]
                        {{ $cat->Descripcion }} 
                    </option>
                @endforeach
            </select>
            @error('Id_Categoria')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">Nombre Elemento</label>
            <input type="text" name="Nombre_Elemento" value="{{ $val('Nombre_Elemento') }}"
                   class="w-full border rounded px-3 py-2" >
            @error('Nombre_Elemento')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Estado Elemento</label>
            <input type="text" name="Estado_Elemento" value="{{ $val('Estado_Elemento') }}"
                   class="w-full border rounded px-3 py-2" >
            @error('Estado_Elemento')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

            
    </div>
</div>