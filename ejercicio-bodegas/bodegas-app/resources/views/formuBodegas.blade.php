@extends('layouts/app');

@section('contenido')
    <div class="row">
        <div class=" offset-3 col-6 d-flex justify-content-between">
            <h2>Nueva Bodega</h2>
            <a class="btn btn-primary btn-lg" href="#" role="button">Volver</a>
        </div>

    </div>
    <div class="row">
        <form action="/bodegas" method="POST" class="offset-3 col-6">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="direccion">Direccion</label>
                <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono">
            </div>
            <div class="form-group">
                <label for="contacto">Persona de contacto</label>
                <input type="text" class="form-control" id="contacto" name="contacto" placeholder="Persona de contacto">
            </div>
            <div class="form-group">
                <label for="añoFundacion">Año de fundación</label>
                <input type="text" class="form-control" id="añoFundacion" name="añoFundacion" placeholder="Año de fundación">
            </div>
            <div class="form-group">
                <label for="informacion">Informacion</label>
                <textarea class="form-control" id="informacion" name="informacion" rows="3"></textarea>
            </div>
            <div>
                <h4>¿Dispone de restaurante?</h4>
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
                <h4>¿Dispone de hotel?</h4>
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
    </div>
</div>
@endsection
