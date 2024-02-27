@extends('plantilla')
@section('titulo1')
{{ 'Registro' }}
@section('seccion')
  <div class="container mt-5">
    <div class="form-container">
      <h2 class="mb-4">Registro de Usuario</h2>
      <form>
        <div class="mb-3">
          <label for="name" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Correo Electrónico</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="mb-3">
          <label for="confirm-password" class="form-label">Confirmar Contraseña</label>
          <input type="password" class="form-control" id="confirm-password" name="confirm-password" required>
        </div>
        <button type="submit" class="btn btn-primary">Registrarse</button>
      </form>
    </div>
  </div>
@stop