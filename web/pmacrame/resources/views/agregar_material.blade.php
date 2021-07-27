@extends("layouts.base")

@section("contenido")

<div class="row mt-5">
    <div class="col-12 col-md-6 col-lg-5 mx-auto">
      <div class="card">
        <div class="card-header bg-primary text-white">
            <i class="fas fa-pencil-alt fa-1x"></i>
          <span>Agregar Material</span>
        </div>

        <div class="card-body">
          <div class="mb-3">
            <label for="nombre-txt" class="form-label">Nombre</label>
            <input type="text" id="nombre-txt" class="form-control">
          </div>
          <div class="mb-3">
            <label for="tipo-select" class="form-label">Tipo de material</label>
            <select id="tipo-select" class="form-select"></select>
          </div>
          <div class="mb-3">
            <label for="contacto-select">Contacto proveedor</label>
            <select  id="contacto-select" class="form-select"></select>
          </div>
          <div class="mb-3">
            <label for="producto-select">Producto</label>
            <select  id="producto-select" class="form-select"></select>
          </div>
          <div class="mb-3">
            <label for="cantidad-txt" class="form-label">Cantidad</label>
            <input type="number" min="0" id="cantidad-txt" class="form-control">
          </div>
          <div class="mb-3">
            <label for="precio-txt" class="form-label">Precio por unidad</label>
            <input type="number" min="0" id="precio-txt" class="form-control">
          </div>
        </div>

        <div class="card-footer d-grid gap-1">
          <button id="registrar-btn" class="btn btn-primary">Registrar</button>
        </div>
      </div>
    </div>
  </div>
@endsection
@section("javascript")
    <script src="{{asset('js/servicios/productosService.js')}}"></script>
    <script src="{{asset('js/servicios/contactosService.js')}}"></script>
    <script src="{{asset('js/servicios/tiposService.js')}}"></script>
    <script src="{{asset('js/servicios/materialesService.js')}}"></script>
    <script src="{{asset('js/agregar_material.js')}}"></script>

@endsection