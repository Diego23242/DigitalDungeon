@extends('plantilla')
@section('titulo1')
{{ 'Comentarios' }}
@section('seccion')
    <div class="container mt-5">
        <div class="form-container">
            <h2 class="mb-4">Comentarios</h2>
            <form>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Comentario</label>
                    <input type="text" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
@stop