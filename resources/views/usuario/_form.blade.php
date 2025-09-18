@php
    // Para edición, $usuario llega definido; en creación es null.
    $val = fn($key, $default = '') => old($key, isset($usuario) ? ($usuario->{$key} ?? $default) : $default);
@endphp

<div class="space-y-4">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label class="block text-sm font-medium mb-1">Nombres</label>
            <input type="text" name="Nombres" value="{{ $val('Nombres') }}"
                   class="w-full border rounded px-3 py-2" required>
            @error('Nombres')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Apellidos</label>
            <input type="text" name="Apellidos" value="{{ $val('Apellidos') }}"
                   class="w-full border rounded px-3 py-2" required>
            @error('Apellidos')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Documento</label>
            <input type="text" name="Documento" value="{{ $val('Documento') }}"
                   class="w-full border rounded px-3 py-2" required>
            @error('Documento')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Correo</label>
            <input type="email" name="Correo" value="{{ $val('Correo') }}"
                   class="w-full border rounded px-3 py-2" required>
            @error('Correo')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Género</label>
            <input type="text" name="Genero" value="{{ $val('Genero') }}"
                   class="w-full border rounded px-3 py-2" required>
            @error('Genero')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Teléfono</label>
            <input type="text" name="Telefono" value="{{ $val('Telefono', '+57') }}"
                   class="w-full border rounded px-3 py-2" required
                   placeholder="+57XXXXXXXXXX" pattern="^\+57\d{10}$"
                   title="Debe comenzar con +57 y tener 10 dígitos">
            @error('Telefono')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Fecha de Nacimiento</label>
            <input type="date" name="Fecha_de_Nacimiento" value="{{ $val('Fecha_de_Nacimiento') }}"
                   class="w-full border rounded px-3 py-2" required>
            @error('Fecha_de_Nacimiento')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Contraseña</label>
            <input type="password" name="Contraseña" value="{{ $val('Contraseña') }}"
                   class="w-full border rounded px-3 py-2" required>
            @error('Contraseña')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div>
            <label class="block text-sm font-medium mb-1">Ficha</label>
            <input type="text" name="ficha_Id_ficha" value="{{ $val('Ficha') }}"
                   class="w-full border rounded px-3 py-2" required>
            @error('Ficha')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>

        <div style="display: none;">
            <label class="block text-sm font-medium mb-1">Rol</label>
            <input type="text" name="Id_Rol" value="1"
                   class="w-full border rounded px-3 py-2" required>
            @error('Rol')<p class="text-red-600 text-sm mt-1">{{ $message }}</p>@enderror
        </div>
    </div>
</div>