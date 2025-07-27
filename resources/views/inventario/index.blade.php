<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de Inventario') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="mb-4">
                        <a href="{{ route('inventario.crear') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Añadir Nuevo Elemento
                        </a>
                    </div>

                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3">Nombre del Elemento</th>
                                    <th scope="col" class="px-6 py-3">Lote</th>
                                    <th scope="col" class="px-6 py-3">Marca</th>
                                    <th scope="col" class="px-6 py-3">Existencias</th>
                                    <th scope="col" class="px-6 py-3">Fecha de Vencimiento</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($elementos as $elemento)
                                <tr class="bg-white border-b">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ $elemento->nombre_elemento }}
                                    </th>
                                    <td class="px-6 py-4">{{ $elemento->lote }}</td>
                                    <td class="px-6 py-4">{{ $elemento->marca }}</td>
                                    <td class="px-6 py-4">{{ $elemento->existencias_elemento }}</td>
                                    <td class="px-6 py-4">{{ $elemento->fecha_vencimiento }}</td>
                                </tr>
                                @empty
                                <tr class="bg-white border-b">
                                    <td colspan="5" class="px-6 py-4 text-center text-gray-500">
                                        No hay elementos en el inventario para mostrar.
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>