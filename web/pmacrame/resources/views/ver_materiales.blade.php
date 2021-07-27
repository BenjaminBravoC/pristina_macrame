@extends("layouts.base")

@section("contenido")
    <div class="row mt-2">
        <div class="col-12 col-md-6 col-lg-5 mx-auto">
            <div class="card">
                <div class="card-header bg-info">
                    <i class="fas fa-filter fa-1x"></i>
                    <span>Filtrar</span>
                </div>
                <div class="card-body">
                    <select class="form-select" id="filtro-tipo">
                        <option value="todos">Todos</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12 col-md-12 col-lg-6 mx-auto">
            <table class="table table-hover tabla-bordered table-striped table-responsive">
                <thead class="bg-primary text-light">
                    <tr>
                        <td>Nombre</td>
                        <td>Tipo</td>
                        <td>Contacto</td>
                        <td>Producto</td>
                        <td>Cantidad</td>
                        <td>Precio</td>
                        <td>Acción</td>
                    </tr>
                </thead>
                <tbody id="tbody-material"></tbody>
            </table>
        </div>
    </div>
@endsection

@section("javascript")
  <script src="{{asset('js/servicios/materialesService.js')}}"></script>
  <script src="{{asset('js/servicios/tiposService.js')}}"></script>
  <script src="{{asset('js/ver_materiales.js')}}"></script>
@endsection