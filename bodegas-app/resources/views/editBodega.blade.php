@extends('layouts/app');

@section('contenido')
    <div class="row">
        <div class=" offset-3 col-6 d-flex justify-content-between">
            <h2>Editar Bodega</h2>
            <a class="btn btn-info btn-lg" href="/bodegas/{{ $bodega->id }}" role="button">Volver</a>
        </div>

    </div>
    <div class="row">
        <form action="/bodegas/{{ $bodega->id }}" method="POST" class="offset-3 col-6">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{$bodega->nombre}}">
            </div>
            <div class="form-group">
                <label for="direccion">Direccion</label>
                <input type="text" class="form-control" id="direccion" name="direccion" value="{{$bodega->direccion}}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{$bodega->email}}">
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" value="{{$bodega->telefono}}">
            </div>
            <div class="form-group">
                <label for="contacto">Persona de contacto</label>
                <input type="text" class="form-control" id="contacto" name="contacto" value="{{$bodega->contacto}}">
            </div>
            <div class="form-group">
                <label for="añoFundacion">Año de fundación</label>
                <input type="text" class="form-control" id="añoFundacion" name="añoFundacion" value="{{$bodega->añoFundacion}}">
            </div>
            <div class="form-group">
                <label for="informacion">Informacion</label>
                <textarea class="form-control" id="informacion" name="informacion" rows="3"></textarea>
            </div>
            <div>
                <h4>¿Dispone de restaurante?</h4>
                @if($bodega->restaurante)
                    <div>
                        <input type="radio" id="siRest" name="restaurante" value="si" checked>
                        <label for="si">Si</label>
                    </div>
                    <div>
                        <input type="radio" id="noRest" name="restaurante" value="no">
                        <label for="no">No</label>
                    </div>
                @else
                    <div>
                        <input type="radio" id="siRest" name="restaurante" value="si">
                        <label for="si">Si</label>
                    </div>
                    <div>
                        <input type="radio" id="noRest" name="restaurante" value="no" checked>
                        <label for="no">No</label>
                    </div>
                @endif
            </div>
            <div>
                <h4>¿Dispone de hotel?</h4>
                @if($bodega->hotel)
                    <div>
                        <input type="radio" id="siHot" name="hotel" value="si" checked>
                        <label for="si">Si</label>
                    </div>
                    <div>
                        <input type="radio" id="noHot" name="hotel" value="no">
                        <label for="no">No</label>
                    </div>
                @else
                    <div>
                        <input type="radio" id="siHot" name="hotel" value="si">
                        <label for="si">Si</label>
                    </div>
                    <div>
                        <input type="radio" id="noHot" name="hotel" value="no" checked>
                        <label for="no">No</label>
                    </div>
                @endif
            </div>
            <div>
                <input type="submit" value="Editar" class="btn btn-lg btn-primary">
            </div>
        </form>
    </div>
    </div>
@endsection
