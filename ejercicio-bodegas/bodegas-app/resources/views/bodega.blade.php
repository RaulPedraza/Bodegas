@extends('layouts/app');

@section('contenido')
    <div class="row offset-2">
        <div class="col-4">
            <h2>Datos bodega</h2>
            <p><a>Editar</a></p>
            <p><a>Volver</a></p>
            <p><a>Eliminar</a></p>
            <form action="/bodegas/{{ $bodega->id }}" method="POST">
                @csrf
                <div>
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" value="{{$bodega->nombre}}" disabled>
                </div>
                <div>
                    <label for="direccion">Direccion</label>
                    <input type="text" id="direccion" name="direccion" value="{{$bodega->direccion}}" disabled>
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" value="{{$bodega->email}}" disabled>
                </div>
                <div>
                    <label for="telefono">Teléfono</label>
                    <input type="text" id="telefono" name="telefono" value="{{$bodega->telefono}}" disabled>
                </div>
                <div>
                    <label for="contacto">Persona de contacto</label>
                    <input type="text" id="contacto" name="contacto" value="{{$bodega->contacto}}" disabled>
                </div>
                <div>
                    <label for="añoFundacion">Año de fundación</label>
                    <input type="text" id="añoFundacion" name="añoFundacion" value="{{$bodega->añoFundacion}}" disabled>
                </div>
                <div>
                    <h3>¿Dispone de restaurante?</h3>
                    <div>
                        <input type="radio" id="si" name="restaurante" value="si" disabled>
                        <label for="si">Si</label>
                    </div>
                    <div>
                        <input type="radio" id="no" name="restaurante" value="no" disabled>
                        <label for="no">No</label>
                    </div>
                </div>
                <div>
                    <h3>¿Dispone de hotel?</h3>
                    <div>
                        <input type="radio" id="si" name="hotel" value="si" disabled>
                        <label for="si">Si</label>
                    </div>
                    <div>
                        <input type="radio" id="no" name="hotel" value="no" disabled>
                        <label for="no">No</label>
                    </div>
                </div>
                <div>
                    <input type="submit" value="Guardar">
                </div>
            </form>
        </div>
        <div>
            <h2>Vinos disponibles</h2>
            <p><a href="/bodegas/{{ $bodega->id }}/create">+ Añadir vino</a></p>
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Acciones</th>
                </tr>
                @foreach($vinos as $vino)
                    <tr>
                        <td>{{ $vino->nombre }}</td>
                        <td>{{ $vino->tipo }}</td>
                        <td><a href="/vinos/{{ $vino->id }}">Ver</a><a href="">Borrar</a></td>
                    </tr>
                @endforeach
            </table>
        </div>

    </div>

@endsection
