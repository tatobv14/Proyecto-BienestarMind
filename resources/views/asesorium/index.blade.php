<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bienestar Mind') }}
        </h2>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               <div class="flex justify-end p-2 mr-4">
<a href="{{ route('asesorium.create') }}"
class="bg-green-500 hover:bg-green-700 text-white font-bold rounded-md px-5 py-3">
Nuevo</a>
</div>
            <table id="asesoriums" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Identificador de la asesoría</th>
                            <th>Motivo de la asesoría</th>
                            <th>Fecha</th>
                            <th>Receptor asesoría</th>
                            <th>Asesor asesoría</th>
                            <th>Ficha</th>
                            <th>Creado</th>
                            <th>Última modificación</th>
                            <th>Acciones</th>
                     </tr>
                    </thead>
                    <tbody>
                @foreach($asesoriums as $ase)
                            <tr>
                                <td>{{ $ase->Id_Asesoria }}</td>
                                <td>{{ $ase->Motivo_asesoria }}</td>
                                <td>{{ $ase->Fecha }}</td>
                                <td>[{{ $ase->Id_Usuario_Recibe }}] {{ $ase->usuarioRecibe->Nombres }} {{ $ase->usuarioRecibe->Apellidos }}</td>
                                <td>[{{ $ase->Id_Usuario_Asesor }}] {{ $ase->usuarioAsesor->Nombres }} {{ $ase->usuarioAsesor->Apellidos }}</td>                                
                                <td>{{ $ase->ficha_Id_ficha }} {{ optional($ase->ficha)->descripcion }}</td>
                                <td>{{ $ase->created_AT }}</td>
                                <td>{{ $ase->update_AT }}</td>                                
                                <td>
                                    <div class="flex gap-4 justify-center items-center">
                                        <a href="{{ route('asesorium.edit', $ase->Id_Asesoria) }}" class="inline-block px-4 py-2 bg-blue-600 text-white font-semibold rounded-md shadow hover:bg-blue-700 transition duration-200">Editar</a>
                                        <form action="{{ route('asesorium.destroy', $ase->Id_Asesoria) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta asesoría?');" class="m-0 p-0 bg-transparent border-none">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="inline-block px-4 py-2 bg-red-600 text-white font-semibold rounded-md shadow hover:bg-red-700 transition duration-200">Eliminar</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
      {{-- jQuery + DataTables (CDN) --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script>
        $(function () {
            $('#asesoriums').DataTable({
                pageLength: 20,
                dom: 'Bfrtip',

                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.13.8/i18n/es-ES.json'
                },
                buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
            });
        }); 
        </script>
</x-app-layout>
