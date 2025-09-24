@php
    // Para edición, $reservaelemento llega definido; en creación es null.
    $val = fn($key, $default = '') => old($key, isset($reservaelemento) ? ($reservaelemento->{$key} ?? $default) : $default);
@endphp

<div class="space-y-4">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-medium mb-1">Id_Usuario</label>
            <input type="text" name="Id_Usuario" value="{{ $val('Id_Usuario') }}"
                   class="w-full border rounded px-3 py-2" required>
            @error('Id_Usuario')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Id_Elemento</label>
            <input type="text" name="Id_Elemento" value="{{ $val('Id_Elemento') }}"
                   class="w-full border rounded px-3 py-2" required>
            @error('Id_Elemento')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Descripcion</label>
            <input type="text" name="Descripcion_Reserva" value="{{ $val('Descripcion_Reserva') }}"
                   class="w-full border rounded px-3 py-2" required>
            @error('Descripcion')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Ficha</label>
            <input type="email" name="Id_ficha" value="{{ $val('Id_ficha') }}"
                   class="w-full border rounded px-3 py-2" required>
            @error('Ficha')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>


        <div>
            <label class="block text-sm font-medium mb-1">Fecha de Reserva</label>
            <input type="date" name="Fecha_Reserva" value="{{ \Carbon\Carbon::parse($val('Fecha_Reserva'))->format('Y-m-d') }}"
                   class="w-full border rounded px-3 py-2" required>
            @error('Fecha de Reserva')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

    
    </div>
</div>