@php
    // Para edición, $reservaelemento llega definido; en creación es null.
    $val = fn($key, $default = '') => old($key, isset($reservaelemento) ? ($reservaelemento->{$key} ?? $default) : $default);
@endphp

<div class="space-y-4">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

        <div>
            <label class="block text-sm font-medium mb-1">Usuario</label>
            <select name="Id_Usuario" class="w-full border rounded px-3 py-2">
                <option value="">Seleccione un usuario</option>
                @foreach($usuario as $usu)
                    <option value="{{ $usu->Id_Usuario }}" {{ $val('Id_Usuario') == $usu->Id_Usuario ? 'selected' : '' }}>
                        [{{ $usu->Id_Usuario }}]
                        {{ $usu->Nombres }}
                        {{ $usu->Apellidos }}
                    </option>
                @endforeach
            </select>
            @error('Id_Usuario')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Elemento</label>
            <select name="Id_Elemento" class="w-full border rounded px-3 py-2">
                <option value="">Seleccione un elemento</option>
                @foreach($elemento as $ele)
                    <option value="{{ $ele->Id_Elemento }}" {{ $val('Id_Elemento') == $ele->Id_Elemento ? 'selected' : '' }}>
                        [{{ $ele->Id_Elemento }}]
                        {{ $ele->Nombre_Elemento }}
                    </option>
                @endforeach
            </select>
            @error('Id_Elemento')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">Ficha</label>
            <select name="Id_ficha" class="w-full border rounded px-3 py-2">
                <option value="">Seleccione una ficha</option>
                @foreach($ficha as $fic)
                    <option value="{{ $fic->Id_ficha }}" {{ $val('Id_ficha') == $fic->Id_ficha ? 'selected' : '' }}>
                        [{{ $fic->Id_ficha }}]
                        {{ $fic->descripcion }}
                    </option>
                @endforeach
            </select>
            @error('Id_ficha')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Descripcion de reserva</label>
            <input type="text" name="Descripcion_Reserva" value="{{ $val('Descripcion_Reserva') }}"
                class="w-full border rounded px-3 py-2">
            @error('Descripcion_Reserva')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>




        <div>
            <label class="block text-sm font-medium mb-1">Fecha de Reserva</label>
            <input type="date" name="Fecha_Reserva"
                value="{{ \Carbon\Carbon::parse($val('Fecha_Reserva'))->format('Y-m-d') }}"
                class="w-full border rounded px-3 py-2">
            @error('Fecha_Reserva')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>
        

    </div>
</div>