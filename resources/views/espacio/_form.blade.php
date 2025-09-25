@php
    // Para edición, $espacio llega definido; en creación es null.
    $val = fn($key, $default = '') => old($key, isset($espacio) ? ($espacio->{$key} ?? $default) : $default);
@endphp

<div class="space-y-4">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">       
       

         <div>
            <label class="block text-sm font-medium mb-1">Sede</label>
            <select name="Id_Sede" class="w-full border rounded px-3 py-2" >
                <option value="">Seleccione un usuario</option>
                @foreach($sede as $sed)
                    <option value="{{ $sed->Id_Sede }}"
                        {{ $val('Id_Sede') == $sed->Id_Sede ? 'selected' : '' }}>                        
                        [{{ $sed->Id_Sede }}]
                        {{ $sed->Nombre_sede }} 
                    </option>
                @endforeach
            </select>
            @error('Id_Sede')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>


        <div>
            <label class="block text-sm font-medium mb-1">Espacio</label>
            <input type="text" name="Nombre_del_espacio" value="{{ $val('Nombre_del_espacio') }}"
                   class="w-full border rounded px-3 py-2" >
            @error('Nombre_del_espacio')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

    

    </div>
</div>