    @php
        // Para edición, $ficha llega definido; en creación es una instancia vacía.
        $val = fn($key, $default = '') => old($key, $ficha->{$key} ?? $default);
    @endphp

    <div class="space-y-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium mb-1">Id de la ficha</label>
                <input type="text" name="Id_ficha" value="{{ $val('Id_ficha') }}"
                    class="w-full border rounded px-3 py-2" required>
                @error('Id_ficha')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
            </div>

            <div>
                <label class="block text-sm font-medium mb-1">Descripcion</label>
                <input type="text" name="descripcion" value="{{ $val('descripcion') }}"
                    class="w-full border rounded px-3 py-2" required>
                @error('descripcion')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
            </div>

            <div>
                <label class="block text-sm font-medium mb-1">Jornada de la ficha</label>
                <input type="text" name="jornada_ficha" value="{{ $val('jornada_ficha') }}"
                    class="w-full border rounded px-3 py-2">
                @error('jornada_ficha')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
            </div>

           <div>
    <label class="block text-sm font-medium mb-1">ID del programa</label>
    <select name="Id_Programa" class="w-full border rounded px-3 py-2" required>
        <option value="" disabled selected>Seleccione un programa</option>
        @foreach ($programas as $programa)
            <option value="{{ $programa->Id_Programa }}"
                {{ (old('Id_Programa', $ficha->Id_Programa ?? '') == $programa->Id_Programa) ? 'selected' : '' }}>
                {{ $programa->Nombre_programa }}
            </option>
        @endforeach
    </select>
    @error('Id_Programa')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
</div>
        </div>
    </div>