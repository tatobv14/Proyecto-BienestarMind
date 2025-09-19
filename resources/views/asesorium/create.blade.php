<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Asesoria') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="py-8">
                    <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white p-6 shadow sm:rounded-lg">
                            <form action="{{ route('asesorium.store') }}" method="POST" class="space-y-6">
                                @csrf
                                @include('asesorium._form', [
                                    'asesorium' => $asesorium,
                                    'usuario' => null,
                                    'Motivo_asesoria' => $motivo_asesoria ?? '',
                                    'Fecha' => $fecha ?? '',
                                    'Id_Usuario_Recibe' => $Id_usuario_recibe ?? '',
                                    'Id_Usuario_Asesor' => $Id_usuario_asesor ?? '',
                                    'Ficha_Id_Ficha' => $Id_ficha_Id_ficha ?? '',
                                    'create_AT' => $create_AT ?? '',
                                    'update_AT' => $update_AT ?? '',
                                ])

                                <div class="pt-4 flex gap-3">                                    
                                    <button
                                        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Guardar</button>
                                    <a href="{{ route('asesorium.index') }}"
                                        class="px-4 py-2 border rounded">Cancelar</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>