@extends("layouts.base")

@section("contenido")

<div class="row mt-5">
    <div class="col-12 col-md-6 col-lg-5 mx-auto">
      <div class="card">
        <div class="card-header bg-primary text-white">
            <i class="fas fa-address-card fa-1x"></i>
          <span>Agregar Contacto</span>
        </div>

        <div class="card-body">
            <div class="mb-3">
              <label for="nombre-txt" class="form-label">Nombre</label>
              <input type="text" id="nombre-txt" class="form-control">
            </div>
            <div class="mb-3">
              <label for="tipo-select" class="form-label">Tipo de contacto</label>
              <select id="tipo-select" class="form-select"></select>
            </div>
            <div class="mb-3">
                <label for="telefono-txt" class="form-label">Teléfono</label>
                <input type="text" id="telefono-txt" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label" for="direccion-txt">Dirección</label>
                <textarea id="direccion-txt"></textarea>
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
    <script src="{{asset('js/agregar_contac.js')}}"></script>
    <script src="{{asset('js/servicios/tiposService.js')}}"></script>
    <script src="{{asset('js/servicios/contactosService.js')}}"></script>

@endsection