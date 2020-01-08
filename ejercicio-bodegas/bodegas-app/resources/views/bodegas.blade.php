<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bodegas</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p><a href="">+ Añadir Bodega</a></p>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Localización</th>
            <th>Teléfono</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
        @foreach($bodegas as $bodega)
            <tr>
                <td>$bodega->nombre</td>
                <td>$bodega->direccion</td>
                <td>$bodega->telefono</td>
                <td>$bodega->email</td>
                <td><a href="">Entrar</a><a href="">Borrar</a></td>
            </tr>
        @endforeach
    </table>
</body>
</html>
