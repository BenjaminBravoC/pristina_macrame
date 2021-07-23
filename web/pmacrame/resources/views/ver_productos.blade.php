@extends("layouts.base")

@section("contenido")
    <div class="row mt-5">
        <div class="col-12 col-md-12 col-lg-6 mx-auto">
            <table class="table table-hover tabla-bordered table-striped table-responsive">
                <thead class="bg-primary text-light">
                    <tr>
                        <td>NRO</td>
                        <td>Nombre</td>
                        <td>Categoría</td>
                        <td>Precio</td>
                        <td>Descripción</td>
                        <td>Acción</td>
                    </tr>
                </thead>
                <tbody id="tbody-producto"></tbody>
            </table>
        </div>
    </div>
@endsection

@section("javascript")
  <script src="{{asset('js/servicios/productosService.js')}}"></script>
  <script src="{{asset('js/ver_productos.js')}}"></script>
@endsection