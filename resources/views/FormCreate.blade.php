<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Formulario</h2>
<hr>

<form action="/reenviar" method="POST">
        @csrf

        <label>Nombre:</label><br>
        <input type="text" name="nombreProducto" value="{{old('nombreProducto')}}">
        @error('nombreProducto')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <label>Precio:</label><br>
        <input type="number" name="precioProducto" value="{{old('precioProducto')}}">
        @error('precioProducto')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <label>Stock:</label><br>
        <input type="number" name="stockProducto" value="{{old('stockProducto')}}">
        @error('stockProducto')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <button type="submit">Guardar</button>
    </form>

</body>
</html>
