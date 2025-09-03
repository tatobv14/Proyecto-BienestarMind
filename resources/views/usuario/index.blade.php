<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h1>Usuarios</h1>

                <table>
                    <thead>
                        <tr>
                            <th>Id Usuario</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usuarios as $usu)
                            <tr>
                                <td>{{ $usu->Id_Usuario }}</td>
                                <td>{{ $usu->Nombres }}</td>
                                <td>{{ $usu->Apellidos }}</td>
                                <td>{{ $usu->Correo }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</x-app-layout>