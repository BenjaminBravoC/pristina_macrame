<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Prístina Macramé</title>
  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{route('home')}}">Prístina Macramé</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link active" aria-current="page" href="{{route('home')}}">Inicio</a>
                  <a class="nav-link" href="{{route('agregar_producto')}}">Agregar Producto</a>
                  <a class="nav-link" href="{{route('ver_productos')}}">Ver Productos</a>
                  <a class="nav-link" href="{{route('agregar_cliente')}}">Agregar Cliente</a>
                  <a class="nav-link" href="{{route('ver_clientes')}}">Ver Clientes</a>
                  <a class="nav-link" href="{{route('agregar_proveedor')}}">Agregar Proveedor</a>
                  <a class="nav-link" href="{{route('ver_proveedores')}}">Ver Proveedores</a>
                </div>
              </div>
            </div>
          </nav>
    </header>
    <main class="container-fluid">
        @yield("contenido")
    </main>

    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>