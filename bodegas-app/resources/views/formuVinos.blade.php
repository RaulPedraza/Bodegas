@extends('layouts/app');

@section('contenido')
    <div class="row">
        <div class="offset-3 col-6 d-flex justify-content-between">
            <h2>Nueva Bodega</h2>
            <a href="/bodegas/{{ $bodega->id }}" class="btn btn-outline-info">volver</a>
        </div>
    </div>
    <div class="row">
        <form action="/bodegas/{{ $bodega->id }}" method="POST" class="offset-3 col-6">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
            </div>
            <div class="form-group">
                <label for="año">Año</label>
                <input type="text" class="form-control" id="año" name="año">
            </div>
            <div class="form-group">
                <label for="alcohol">Alcohol</label>
                <input type="text" class="form-control" id="alcohol" name="alcohol">
            </div>
            <div class="form-group">
                <label for="tipo">Tipo de vino</label>
                <input type="text" class="form-control" id="tipo" name="tipo">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="bodega_id" name="bodega_id" value="{{ $bodega->id }}" hidden>
            </div>
            <div >
                <input type="submit" value="Añadir Vino" class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection
