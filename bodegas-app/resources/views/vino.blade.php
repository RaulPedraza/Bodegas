@extends('layouts/app');

@section('contenido')
    <div class="row">
        <div class="offset-3 col-6 d-flex justify-content-between">
            <h2>Datos bodega</h2>
            <div class="d-flex">
                <a href="/bodegas/{{ $bodega->id }}/vino/edit/{{ $vino->id }}" class="btn btn-outline-warning">Editar</a>
                <a href="/bodegas/{{ $bodega->id }}" class="btn btn-outline-primary">Volver</a>
                <a href="/bodegas/{{ $bodega->id }}/vino/destroy/{{ $vino->id }}" class="btn btn-outline-danger">Eliminar</a>
            </div>

        </div>
    </div>
    <div class="row">
        <form action="/bodegas/{id}" method="POST" class="offset-3 col-6">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{$vino->nombre}}" disabled>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <textarea class="form-control" id="descripcion" name="descripcion" value="{{$vino->descripcion}}" disabled></textarea>
            </div>
            <div class="form-group">
                <label for="año">Año</label>
                <input type="text" class="form-control" id="año" name="año" value="{{$vino->año}}" disabled>
            </div>
            <div class="form-group">
                <label for="alcohol">Alcohol</label>
                <input type="text" class="form-control" id="alcohol" name="alcohol" value="{{$vino->alcohol}}" disabled>
            </div>
            <div class="form-group">
                <label for="tipo">Tipo de vino</label>
                <input type="text" class="form-control" id="tipo" name="tipo" value="{{$vino->tipo}}" disabled>
            </div>
        </form>
    </div>

@endsection
