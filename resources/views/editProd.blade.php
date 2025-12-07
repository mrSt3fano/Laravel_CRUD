<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <form action="/verActualizado/{{ $id->id }}" method="POST">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="PUT">

        <label>Nombre:</label><br>
        <input type="text" name="nombreProducto" value="{{$id->nombre}}"><br><br>

        <label>Precio:</label><br>
        <input type="number" name="precioProducto" value="{{$id->precio}}"><br><br>

        <label>Stock:</label><br>
        <input type="number" name="stockProducto" value="{{$id->stock}}"><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
