@extends('layouts/app');

@section('contenido')
    <div class="row offset-2">
        <div class="col-4">
            <div class="d-flex justify-content-between">
                <h2>Datos bodega</h2>
                <div class="d-flex">
                    <a href="/bodegas/edit/{{ $bodega->id }}" class="btn btn-outline-warning">Editar</a>
                    <a href="/bodegas" class="btn btn-outline-primary">Volver</a>
                    <a href="/bodegas/destroy/{{ $bodega->id }}" class="btn btn-outline-danger">Eliminar</a>
                </div>

            </div>

            <form action="/bodegas/{{ $bodega->id }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{$bodega->nombre}}" disabled>
                </div>
                <div class="form-group">
                    <label for="direccion">Direccion</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" value="{{$bodega->direccion}}" disabled>
                </div >
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{$bodega->email}}" disabled>
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" value="{{$bodega->telefono}}" disabled>
                </div>
                <div class="form-group">
                    <label for="contacto">Persona de contacto</label>
                    <input type="text" class="form-control" id="contacto" name="contacto" value="{{$bodega->contacto}}" disabled>
                </div>
                <div class="form-group">
                    <label for="añoFundacion">Año de fundación</label>
                    <input type="text" class="form-control" id="añoFundacion" name="añoFundacion" value="{{$bodega->añoFundacion}}" disabled>
                </div>
                <div class="form-group">
                    <h3>¿Dispone de restaurante?</h3>
                    @if($bodega->restaurante)
                        <div>
                            <input type="radio" id="siRest" name="restaurante" value="si" checked disabled>
                            <label for="si">Si</label>
                        </div>
                        <div>
                            <input type="radio" id="noRest" name="restaurante" value="no" disabled>
                            <label for="no">No</label>
                        </div>
                    @else
                        <div>
                            <input type="radio" id="siRest" name="restaurante" value="si"  disabled>
                            <label for="si">Si</label>
                        </div>
                        <div>
                            <input type="radio" id="noRest" name="restaurante" value="no" checked disabled>
                            <label for="no">No</label>
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <h3>¿Dispone de hotel?</h3>
                    @if($bodega->hotel)
                        <div>
                            <input type="radio" id="siHot" name="hotel" value="si" checked disabled>
                            <label for="si">Si</label>
                        </div>
                        <div>
                            <input type="radio" id="noHot" name="hotel" value="no" disabled>
                            <label for="no">No</label>
                        </div>
                    @else
                        <div>
                            <input type="radio" id="siHot" name="hotel" value="si" disabled>
                            <label for="si">Si</label>
                        </div>
                        <div>
                            <input type="radio" id="noHot" name="hotel" value="no" checked disabled>
                            <label for="no">No</label>
                        </div>
                    @endif
                </div>
            </form>
        </div>
        <div class="col-4">
            <div class="d-flex justify-content-between">
                <h2>Vinos disponibles</h2>
                <a href="/bodegas/{{ $bodega->id }}/create" class="btn btn-lg btn-outline-primary">+ Añadir vino</a>
            </div>
            <table class="table table-bordered">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Acciones</th>
                </tr>
                @foreach($vinos as $vino)
                    <tr>
                        <td scope="row">{{ $vino->nombre }}</td>
                        <td>{{ $vino->tipo }}</td>
                        <td><a href="/bodegas/{{ $bodega->id }}/vino/{{ $vino->id }}" class="btn btn-outline-primary">Ver</a><a href="/bodegas/{{ $bodega->id }}/vino/destroy/{{ $vino->id }}" class="btn btn-outline-danger">Borrar</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
        <div class="col-2"></div>
    </div>
@endsection
