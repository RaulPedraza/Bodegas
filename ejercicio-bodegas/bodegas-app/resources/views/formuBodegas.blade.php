<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario Bodegas</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Nueva Bodega</h2>
    <p><a>volver</a></p>
    <form action="/bodegas" method="POST">
        @csrf
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre">
        </div>
        <div>
            <label for="direccion">Direccion</label>
            <input type="text" id="direccion" name="direccion">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" id="email" name="email">
        </div>
        <div>
            <label for="telefono">Teléfono</label>
            <input type="text" id="telefono" name="telefono">
        </div>
        <div>
            <label for="contacto">Persona de contacto</label>
            <input type="text" id="contacto" name="contacto">
        </div>
        <div>
            <label for="añoFundacion">Año de fundación</label>
            <input type="text" id="añoFundacion" name="añoFundacion">
        </div>
        <div>
            <label for="informacion">Informacion</label>
            <textarea id="informacion" name="informacion"></textarea>
        </div>
        <div>
            <h3>¿Dispone de restaurante?</h3>
            <div>
                <input type="radio" id="si" name="restaurante" value="si">
                <label for="si">Si</label>
            </div>
            <div>
                <input type="radio" id="no" name="restaurante" value="no">
                <label for="no">No</label>
            </div>
        </div>
        <div>
            <h3>¿Dispone de hotel?</h3>
            <div>
                <input type="radio" id="si" name="hotel" value="si">
                <label for="si">Si</label>
            </div>
            <div>
                <input type="radio" id="no" name="hotel" value="no">
                <label for="no">No</label>
            </div>
        </div>
        <div>
            <input type="submit" value="Añadir">
        </div>
    </form>
</body>
</html>
