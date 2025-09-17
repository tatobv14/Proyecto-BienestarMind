<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
               
            <table id="asesoriums" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Id_Asesoria</th>
                            <th>Motivo_asesoria</th>
                            <th>Fecha</th>
                            <th>Id_Usuario_Recibe</th>
                            <th>Id_Usuario_Asesor</th>
                            <th>ficha_Id_ficha</th>
                        </tr>
                    </thead>
                    <tbody>
                @foreach($asesoriums as $ase)
                            <tr>
                                <td>{{ $ase->Id_Asesoria }}</td>
                                <td>{{ $ase->Motivo_asesoria }}</td>
                                <td>{{ $ase->Fecha }}</td>
                                <td>{{ $ase->Id_Usuario_Recibe }}</td>
                                <td>{{ $ase->Id_Usuario_Asesor }}</td>
                                <td>{{ $ase->ficha_Id_ficha }}</td>
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
