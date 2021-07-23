@extends("layouts.base")

@section("contenido")

<div class="row mt-5">
    <div class="col-12 col-md-6 col-lg-5 mx-auto">
      <div class="card">
        <div class="card-header bg-primary text-white">
          <span>Agregar Producto</span>
        </div>

        <div class="card-body">
            <div class="mb-3">
              <label for="nombre-txt" class="form-label">Nombre</label>
              <input type="text" id="nombre-txt" class="form-control">
            </div>
            <div class="mb-3">
              <label for="categoria-select" class="form-label">Categoría</label>
              <select id="categoria-select" class="form-select"></select>
            </div>
            <div class="mb-3">
              <label for="precio-txt" class="form-label">Precio</label>
              <input type="number" min="0" class="form-control" id="precio-txt">
            </div>
            <div class="mb-3">
                <label class="form-label" for="descripcion-txt">Descripción</label>
                <textarea id="descripcion-txt"></textarea>
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
  <script src="{{asset('js/index.js')}}"></script>
  <script src="{{asset('js/agregar_prod.js')}}"></script>

@endsection