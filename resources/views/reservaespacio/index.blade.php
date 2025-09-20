<x-app-layout>
<x-slot name="header">
<h2 class="font-semibold text-xl text-gray-800 leading-tight">
{{ __('Reserva Espacios') }}
</h2>
</x-slot>

<div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">


            <table id="reservaespacio" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Id_ReservaEspacio</th>
                        <th>Fecha_Reserva</th>
                        <th>Id_Usuario</th>
                        <th>Id_Espacio</th>
                        <th>Duracion</th>
                        <th>Created_AT</th>
                        <th>Update_AT</th>
                        <th >Acciones</th> 
                    </tr>
                </thead>
                <tbody>
                    @foreach($reservaespacio as $resesp)
                        <tr>
                            <td>{{ $resesp->Id_ReservaEspacio }}</td>
                            <td>{{ $resesp->Fecha_Reserva }}</td>
                            <td>{{ $resesp->Id_Usuario }}</td>
                            <td>{{ $resesp->Id_Espacio }}</td>
                            <td>{{ $resesp->Duracion }}</td>
                            <td>{{ $resesp->Created_AT }}</td>
                            <td>{{ $resesp->Update_AT }}</td>
                            <td>{{ $resesp->Acciones }}</td>

                          
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
        $('#reservaespacio').DataTable({
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