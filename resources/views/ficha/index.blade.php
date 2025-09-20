<x-app-layout>
<x-slot name="header">
<h2 class="font-semibold text-xl text-gray-800 leading-tight">
{{ __('Fichas') }}
</h2>
</x-slot>

<div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">


            <table id="ficha" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Id_ficha</th>
                        <th>Id_Programa</th>
                        <th>descripcion</th>
                        <th>jornada_ficha</th>
                        <th>Created_AT</th>
                        <th>Update_AT</th>
                        <th >Acciones</th> 
                    </tr>
                </thead>
                <tbody>
                    @foreach($ficha as $fic)
                        <tr>
                            <td>{{ $fic->Id_ficha }}</td>
                            <td>{{ $fic->Id_Programa }}</td>
                            <td>{{ $fic->descripcion }}</td>
                            <td>{{ $fic->jornada_ficha }}</td>
                            <td>{{ $fic->Created_AT }}</td>
                            <td>{{ $fic->Update_AT }}</td>
                            <td>{{ $fic->Acciones }}</td>

                          
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

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
        $('#ficha').DataTable({
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