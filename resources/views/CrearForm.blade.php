@extends('vistaProductos')

@section('formulario_crear')

    <div class="min-h-screen flex items-start justify-center bg-gray-50 p-6">

        <div class="w-full max-w-md bg-white p-6 rounded-lg shadow-md border border-gray-200 mt-10">

            <h2 class="text-2xl font-bold text-gray-800 mb-6">Crear Nuevo Producto</h2>
            <p class="text-sm text-red-500 mb-4">El formulario sólo acepta datos válidos.</p>
            <hr class="mb-6">

            <form action="/reenviar" method="POST">

                @csrf

                <div class="mb-4">
                    <label for="nombreProducto" class="block text-sm font-medium text-gray-700 mb-1">Nombre:</label>
                    <input
                        type="text"
                        name="nombreProducto"
                        value="{{old('nombreProducto')}}"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                        required>
                    @error('nombreProducto')
                        <div class="text-xs text-red-500 mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="precioProducto" class="block text-sm font-medium text-gray-700 mb-1">Precio:</label>
                    <input
                        type="number"
                        name="precioProducto"
                        value="{{old('precioProducto')}}"
                        step="0.01"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                        required>
                    @error('precioProducto')
                        <div class="text-xs text-red-500 mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="stockProducto" class="block text-sm font-medium text-gray-700 mb-1">Stock:</label>
                    <input
                        type="number"
                        name="stockProducto"
                        value="{{old('stockProducto')}}"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                        required>
                    @error('stockProducto')
                        <div class="text-xs text-red-500 mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <button
                    type="submit"
                    class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150 ease-in-out">
                    Guardar
                </button>
            </form>
        </div>
    </div>

@endsection
