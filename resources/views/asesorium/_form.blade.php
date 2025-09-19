@php
    // Para edición, $asesorium llega definido; en creación es una instancia vacía.
    $val = fn($key, $default = '') => old($key, $asesorium->{$key} ?? $default);
@endphp

<div class="space-y-4">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-medium mb-1">Motivo de asesoría</label>
            <input type="text" name="Motivo_asesoria" value="{{ $val('Motivo_asesoria') }}"
                   class="w-full border rounded px-3 py-2" required>
            @error('Motivo_asesoria')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Fecha</label>
            <input type="date" name="Fecha" value="{{ $val('Fecha') }}"
                   class="w-full border rounded px-3 py-2" required>
            @error('Fecha')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">ID del usuario que recibe la asesoría</label>
            <input type="text" name="Id_Usuario_Recibe" value="{{ $val('Id_Usuario_Recibe') }}"
                   class="w-full border rounded px-3 py-2">
            @error('Id_Usuario_Recibe')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">ID del usuario asesor</label>
            <input type="text" name="Id_Usuario_Asesor" value="{{ $val('Id_Usuario_Asesor') }}"
                   class="w-full border rounded px-3 py-2">
            @error('Id_Usuario_Asesor')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">ID de la ficha</label>
            <input type="text" name="ficha_Id_ficha" value="{{ $val('ficha_Id_ficha') }}"
                   class="w-full border rounded px-3 py-2" required>
            @error('ficha_Id_ficha')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Estado</label>
            <select name="Estado" class="w-full border rounded px-3 py-2" required>
                <option value="1" {{ $val('Estado') == '1' ? 'selected' : '' }}>Activo</option>
                <option value="0" {{ $val('Estado') == '0' ? 'selected' : '' }}>Inactivo</option>
            </select>
            @error('Estado')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>
    </div>
</div>