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
    <h2>Datos bodega</h2>
    <p><a>Editar</a></p>
    <p><a>Volver</a></p>
    <p><a>Eliminar</a></p>
    <form action="/bodegas/{id}" method="POST">
        @csrf
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" value="{{$vino->nombre}}"disabled>
        </div>
        <div>
            <label for="descripcion">Descripcion</label>
            <textarea id="descripcion" name="descripcion" value="{{$vino->descripcion}}" disabled></textarea>
        </div>
        <div>
            <label for="año">Año</label>
            <input type="text" id="año" name="año" value="{{$vino->año}}" disabled>
        </div>
        <div>
            <label for="alcohol">Alcohol</label>
            <input type="text" id="alcohol" name="alcohol" value="{{$vino->alcohol}}" disabled>
        </div>
        <div>
            <label for="tipo">Tipo de vino</label>
            <input type="text" id="tipo" name="tipo" value="{{$vino->tipo}}" disabled>
        </div>
        <div>
            <input type="submit" value="Añadir Vino" disabled>
        </div>
    </form>
</body>
</html>
