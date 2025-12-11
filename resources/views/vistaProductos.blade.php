<!DOCTYPE html>
<html>
<head>
    <title>Productos</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <x-app-layout>
    <x-slot name="header">

        <div>
            @if ($user->rol == 1 || $user->rol == 2)
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('INVENTARIO LISTO  PARA MODIFICAR') }}
            </h2><br>
            <h3>{{("Usuario con privilegios elevados")}}</h3><br>

                        <form action="/fomrCrea" method="GEt" class="inline mb-6">

                            @method('GET')
                            <button type="submit"
                                class="bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-150 ease-in-out">
                                Crear Producto
                            </button>
                        </form>
                @else
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('INVENTARIO DE PRODUCTOS') }}
                </h2><br>
                        {{ __("Bienvenido $user->name") }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            @endif


            <form action="/profile" method="GEt" class="inline mb-6">

                @method('GET')
                <button type="submit"
                    class="bg-blue-600 hover:bg-grey-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-150 ease-in-out">
                    Mi Perfil
                </button>
            </form>
        </div>
    </x-slot>




<div class="bg-gray-100 p-8 flex space-x-8">
    <div class="flex-shrink-0 w-3/5">

        @if ($productos->isEmpty())
            <p class="text-gray-600 text-lg mt-4">No hay productos registrados en el inventario.</p>
        @else
            <hr class="my-4">

            <table class="w-full bg-white shadow-xl rounded-lg overflow-hidden">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="py-3 px-4 text-left">ID</th>
                        <th class="py-3 px-4 text-left">Nombre</th>
                        <th class="py-3 px-4 text-left">Precio</th>
                        <th class="py-3 px-4 text-left">Stock</th>
                         @if ($user->rol == 1 || $user->rol == 2)
                            <th class="py-3 px-4 text-left">Eliminar</th>
                            <th class="py-3 px-4 text-left">Actualizar</th>
                        @endif
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">

                    @foreach ($productos as $producto)
                    <tr class="hover:bg-gray-50">
                        <td class="py-3 px-4">{{ $producto->id }}</td>
                        <td class="py-3 px-4">{{ $producto->nombre }}</td>
                        <td class="py-3 px-4">${{ number_format($producto->precio, 2) }}</td>
                        <td class="py-3 px-4">{{ $producto->stock }}</td>
                         @if ($user->rol == 1 || $user->rol == 2)
                            <td class="py-3 px-4">

                                <form action="/eliminar/{{ $producto->id }}" method="POST" class="inline"
                                    onsubmit="return confirm('¿Estás seguro de que quieres eliminar {{ $producto->nombre }}?')">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                        class="text-red-600 hover:text-red-800 font-semibold transition duration-150 ease-in-out">
                                        Eliminar
                                    </button>
                                </form>

                            </td>


                        <td class="py-3 px-4">

                            <form action="/formUpdate/{{ $producto->id }}" method="GEt" class="inline">

                                @method('GET')

                                <button type="submit"
                                    class="text-blue-600 hover:text-blue-800 font-semibold transition duration-150 ease-in-out">
                                    Actualizar
                                </button>
                            </form>

                        </td>
                        @endif

                    </tr>
                    @endforeach

                </tbody>
            </table>

        @endif
    </div>

    {{-- CAMBIO AQUÍ: justify-start mueve el contenido hacia arriba. Añadimos pt-4 para un poco de espacio superior. --}}
        <div class="w-2/5 flex flex-col items-center justify-start p-4 pt-4">

        <div class="w-full">
            @yield('formulario')
        </div>

        <div class="w-full ">
            @yield('formulario_crear')
        </div>

    </div>

</div>
</x-app-layout>

</body>
</html>
