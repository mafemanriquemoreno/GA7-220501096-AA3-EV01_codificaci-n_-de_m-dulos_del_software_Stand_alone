<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Agregar Nuevo Elemento') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <form method="POST" action="{{ route('inventario.store') }}">
                        @csrf

                        @if ($errors->any())
                            <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                                <strong class="font-bold">¡Error!</strong>
                                <span class="block sm:inline">Por favor, corrige los siguientes errores:</span>
                                <ul class="mt-2 list-disc list-inside">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
                            <div>
                                <label for="nombre_elemento" class="block font-medium text-sm text-gray-700">{{ __('Nombre del Producto') }}</label>
                                <input id="nombre_elemento" name="nombre_elemento" type="text" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" placeholder="Ej: Reactivo de Glucosa" value="{{ old('nombre_elemento') }}">
                            </div>
                            <div>
                                <label for="marca" class="block font-medium text-sm text-gray-700">{{ __('Marca') }}</label>
                                <input id="marca" name="marca" type="text" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" placeholder="Ej: Roche" value="{{ old('marca') }}">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
                            <div>
                                <label for="lote" class="block font-medium text-sm text-gray-700">{{ __('Número de Lote') }}</label>
                                <input id="lote" name="lote" type="text" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" placeholder="Ej: L202401" value="{{ old('lote') }}">
                            </div>
                            <div>
                                <label for="fecha_vencimiento" class="block font-medium text-sm text-gray-700">{{ __('Fecha de Vencimiento') }}</label>
                                <input id="fecha_vencimiento" name="fecha_vencimiento" type="date" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" value="{{ old('fecha_vencimiento') }}">
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="existencias_elemento" class="block font-medium text-sm text-gray-700">{{ __('Cantidad en Existencia') }}</label>
                            <input id="existencias_elemento" name="existencias_elemento" type="number" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" placeholder="0" value="{{ old('existencias_elemento') }}">
                        </div>

                        <div class="flex items-center justify-end mt-6">
                            <a href="{{ route('inventario.index') }}" class="text-gray-600 hover:text-gray-900 mr-4">
                                {{ __('Cancelar') }}
                            </a>
                            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                                {{ __('Guardar Elemento') }}
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>