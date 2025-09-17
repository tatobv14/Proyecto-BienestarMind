<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Usuarios') }}
        </h2>
    </x-slot>
    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form class="max-w-md mx-auto">
                        <div class="mb-5">
                            <label for="floating_email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                Dirección de correo electrónico
                            </label>
                            <input type="email" name="floating_email" id="floating_email" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                        </div>
                        <div class="mb-5">
                            <label for="floating_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                Contraseña
                            </label>
                            <input type="password" name="floating_password" id="floating_password" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                        </div>
                        <div class="mb-5">
                            <label for="floating_repeat_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                Confirme la contraseña
                            </label>
                            <input type="password" name="repeat_password" id="floating_repeat_password" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                        </div>
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="mb-5">
                                <label for="floating_first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                    Primer nombre
                                </label>
                                <input type="text" name="floating_first_name" id="floating_first_name" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                            </div>
                            <div class="mb-5">
                                <label for="floating_last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                    Segundo nombre
                                </label>
                                <input type="text" name="floating_last_name" id="floating_last_name" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 md:gap-6">
                            <div class="mb-5">
                                <label for="floating_phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                    Número de teléfono (+57 3004568898)
                                </label>
                                <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone" id="floating_phone" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                            </div>
                            <div class="mb-5">
                                <label for="floating_company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                    Empresa
                                </label>
                                <input type="text" name="floating_company" id="floating_company" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                            </div>
                        </div>
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            Confirmar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>