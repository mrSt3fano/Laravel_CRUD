@extends('vistaProductos')

@section('TITULO_DE_LA_PAGINA_WEB', 'MÓDULO DE LISTADO DE PRODUCTOS')

@section('formulario')

    {{-- Contenedor principal con fondo ligero y centrado --}}
    <div class="min-h-screen flex items-start justify-center bg-gray-50 p-6">

        {{-- Tarjeta del formulario --}}
        <div class="w-full max-w-md bg-white p-6 rounded-lg shadow-md border border-gray-200 mt-10">

            <h2 class="text-2xl font-bold text-gray-800 mb-2">Formulario de Edicion</h2>
            <p class="text-sm text-red-500 mb-4">El formulario sólo acepta datos válidos.</p>
            <hr class="mb-6">

            <form action="/verActualizado/{{ $id->id }}" method="POST">

                {{-- Campos de seguridad obligatorios --}}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">

                {{-- Campo Nombre --}}
                <div class="mb-4">
                    <label for="nombreProducto" class="block text-sm font-medium text-gray-700 mb-1">Nombre:</label>
                    <input
                        type="text"
                        name="nombreProducto"
                        value="{{$id->nombre}}"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                        required>
                    @error('nombreProducto')
                        <div class="text-xs text-red-500 mt-1">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Campo Precio --}}
                <div class="mb-4">
                    <label for="precioProducto" class="block text-sm font-medium text-gray-700 mb-1">Precio:</label>
                    <input
                        type="number"
                        name="precioProducto"
                        value="{{$id->precio}}"
                        step="0.01"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                        required>
                    @error('precioProducto')
                        <div class="text-xs text-red-500 mt-1">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Campo Stock --}}
                <div class="mb-6">
                    <label for="stockProducto" class="block text-sm font-medium text-gray-700 mb-1">Stock:</label>
                    <input
                        type="number"
                        name="stockProducto"
                        value="{{$id->stock}}"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                        required>
                    @error('stockProducto')
                        <div class="text-xs text-red-500 mt-1">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Botón de Envío --}}
                <button
                    type="submit"
                    class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150 ease-in-out">
                    Enviar
                </button>
            </form>
        </div>
    </div>

@endsection
