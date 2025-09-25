@php
    // Para edición, $reservaespacio llega definido; en creación es null.
    $val = fn($key, $default = '') => old($key, isset($reservaespacio) ? ($reservaespacio->{$key} ?? $default) : $default);
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
            <label class="block text-sm font-medium mb-1">Id_Espacio</label>
            <input type="text" name="Id_Espacio" value="{{ $val('Id_Espacio') }}"
                   class="w-full border rounded px-3 py-2" required>
            @error('Id_Espacio')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Duracion</label>
            <input type="text" name="Duracion" value="{{ $val('Duracion') }}"
                   class="w-full border rounded px-3 py-2" required>
            @error('Duracion')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Motivo Reserva</label>
            <input type="email" name="Motivo_Reserva" value="{{ $val('Motivo_Reserva') }}"
                   class="w-full border rounded px-3 py-2" required>
            @error('Motivo_Reserva')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Id_ficha</label>
            <input type="text" name="Id_ficha" value="{{ $val('Id_ficha') }}"
                   class="w-full border rounded px-3 py-2" required>
            @error('Id_ficha')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>


        <div>
            <label class="block text-sm font-medium mb-1">Fecha de reserva</label>
            <input type="date" name="Fecha_Reserva" value="{{ \Carbon\Carbon::parse($val('Fecha_Reserva'))->format('Y-m-d') }}"
                   class="w-full border rounded px-3 py-2" required>
            @error('Fecha de reserva')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

    </div>
</div>