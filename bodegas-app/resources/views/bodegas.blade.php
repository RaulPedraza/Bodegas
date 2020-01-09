@extends('layouts/app')

@section('contenido')
<div class="row offset-2">
    <p><a href="/bodegas/create" class="btn btn-primary">+ Añadir Bodega</a></p>
</div>
<div class="row">
    <div class="col-2"></div>
    <div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Localización</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Email</th>
                <th scope="col">Acciones</th>
            </tr>

        </thead>
        @foreach($bodegas as $bodega)
            <tr>
                <td scope="row">{{ $bodega->nombre }}</td>
                <td>{{ $bodega->direccion }}</td>
                <td>{{ $bodega->telefono }}</td>
                <td>{{ $bodega->email }}</td>
                <td><a href="/bodegas/{{ $bodega->id }}" class="btn btn-outline-primary">Entrar</a><a href="/bodegas/destroy/{{ $bodega->id }}" class="btn btn-outline-danger">Borrar</a></td>
            </tr>
        @endforeach
    </table>
    </div>
    <div class="col-2"></div>
</div>
@endsection

