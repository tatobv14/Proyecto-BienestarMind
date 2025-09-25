@php
    // Para edición, $asesorium llega definido; en creación es una instancia vacía.
    $val = fn($key, $default = '') => old($key, $asesorium->{$key} ?? $default);
@endphp

<div class="space-y-4">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-medium mb-1">Motivo de asesoría</label>
            <input type="text" name="Motivo_asesoria" value="{{ $val('Motivo_asesoria') }}"
                   class="w-full border rounded px-3 py-2" >
            @error('Motivo_asesoria')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Fecha</label>
            <input type="date" name="Fecha" value="{{ \Carbon\Carbon::parse($val('Fecha'))->format('Y-m-d') }}"
                   class="w-full border rounded px-3 py-2" >
            @error('Fecha')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>
        

        <div>
            <label class="block text-sm font-medium mb-1">Usuario que recibe la asesoría</label>
            <select name="Id_Usuario_Recibe" class="w-full border rounded px-3 py-2" >
                <option value="">Seleccione un usuario</option>
                @foreach($usuario as $usu)
                    <option value="{{ $usu->Id_Usuario }}"                        
                        {{ $val('Id_Usuario_Recibe') == $usu->Id_Usuario ? 'selected' : '' }}>
                        [{{ $usu->Id_Usuario }}]
                        {{ $usu->Nombres }} 
                        {{ $usu->Apellidos }} 
                    </option>
                @endforeach
            </select>
            @error('Id_Usuario_Recibe')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Usuario que imparte la asesoría</label>
            <select name="Id_Usuario_Asesor" class="w-full border rounded px-3 py-2" >
                <option value="">Seleccione un usuario</option>
                @foreach($usuario as $usu)
                    <option value="{{ $usu->Id_Usuario }}"
                        {{ $val('Id_Usuario_Asesor') == $usu->Id_Usuario ? 'selected' : '' }}>                        
                        [{{ $usu->Id_Usuario }}]
                        {{ $usu->Nombres }} 
                        {{ $usu->Apellidos }} 
                    </option>
                @endforeach
            </select>
            @error('Id_Usuario_Asesor')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>   

        <div>
            <label class="block text-sm font-medium mb-1">Ficha</label>
            <select name="ficha_Id_ficha" class="w-full border rounded px-3 py-2" >
                <option value="">Seleccione una ficha</option>
                @foreach($ficha as $fic)
                    <option value="{{ $fic->Id_ficha }}"                        
                        {{ $val('ficha_Id_ficha') == $fic->Id_ficha ? 'selected' : '' }}>
                        [{{ $fic->Id_ficha }}]
                        {{ $fic->descripcion }} 
                    </option>
                @endforeach
            </select>
            @error('ficha_Id_ficha')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>


        
    </div>
</div>