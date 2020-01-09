<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Nueva Bodega</h2>
<p><a href="/bodegas/{id}">volver</a></p>
<form action="/bodegas/{id}" method="POST">
    @csrf
    <div>
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre">
    </div>
    <div>
        <label for="descripcion">Descripcion</label>
        <textarea id="descripcion" name="descripcion"></textarea>
    </div>
    <div>
        <label for="año">Año</label>
        <input type="text" id="año" name="año">
    </div>
    <div>
        <label for="alcohol">Alcohol</label>
        <input type="text" id="alcohol" name="alcohol">
    </div>
    <div>
        <label for="tipo">Tipo de vino</label>
        <input type="text" id="tipo" name="tipo">
    </div>
    <div>
        <input type="text" id="bodega_id" name="bodega_id" value="{{ $bodega->id }}" hidden>
    </div>
    <div>
        <input type="submit" value="Añadir Vino">
    </div>
</form>
</body>
</html>
