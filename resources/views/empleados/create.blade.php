@extends('app')

@section('content')
<form method="POST" action="{{ route('empleados.store') }}" enctype="application/x-www-form-urlencoded">
  @csrf
  <div class="row">
    <div class="mb-3 col-lg-12">
      <label for="dni" class="form-label">DNI</label>
      <input type="text" class="form-control" id="dni" name="dni" aria-describedby="dniAyuda">
      <div id="dniAyuda" class="form-text">Documento de Identificación Nacional</div>
    </div>
    <div class="mb-3 col-lg-6">
      <label for="nombre" class="form-label">Nombre</label>
      <input type="text" class="form-control" id="nombre" name="nombre">
    </div>
    <div class="mb-3 col-lg-6">
      <label for="apellido" class="form-label">Apellido</label>
      <input type="text" class="form-control" id="apellido" name="apellido">
    </div>
    <div class="mb-3 col-lg-12">
      <label for="direccion" class="form-label">Dirección</label>
      <input type="text" class="form-control" id="direccion" name="direccion">
    </div>
    <div class="mb-3 col-lg-6">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3 col-lg-6">
      <label for="telefono" class="form-label">Telefono</label>
      <input type="text" class="form-control" id="telefono" name="telefono">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection
