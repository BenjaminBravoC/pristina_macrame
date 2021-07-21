@extends("layouts.base")

@section("contenido")
    <div class="row mt-5">
        <div class="col-12 col-md-12 col-lg-6 mx-auto">
            <table class="table table-hover tabla-bordered table-striped table-responsive">
                <thead class="bg-primary text-light">
                    <tr>
                        <td>Nombre</td>
                        <td>Categoría</td>
                        <td>Precio</td>
                        <td>Descripción</td>
                    </tr>
                </thead>
                <tbody id="tbody-consola"></tbody>
            </table>
        </div>
    </div>
@endsection