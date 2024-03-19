@extends('plantilla')
@section('seccion')
    <div class="container mt-5">
        <div class="form-container">
          <h2 class="mb-4">Inicio de sesion</h2>
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
              <label for="email" class="form-label">Correo Electrónico</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Iniciar sesion</button>
          </form><br>
          <a href="recuperar.html"><button type="submit" class="btn btn-primary">Recuperar Contraseña</button></a>
        </div>
      </div>
@stop