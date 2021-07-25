<!doctype html>
<html lang="es">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{asset('vendor/fontawesome-free-5.15.3-web/css/all.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <title>Prístina Macramé</title>
  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{route('home')}}">
                <img class="logo" src="{{asset('img/logo.jpg')}}">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <i class="fas fa-home fa-1x"></i>
                  <a class="nav-link active" aria-current="page" href="{{route('home')}}">Inicio</a>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fas fa-box fa-1x"></i>
                      Productos
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="nav-link dropdown-item" href="{{route('agregar_producto')}}">Agregar Producto</a></li>
                      <li><a class="nav-link dropdown-item" href="{{route('ver_productos')}}">Ver Productos</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fas fa-address-card fa-1x"></i>
                      Contactos
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="nav-link dropdown-item" href="{{route('agregar_contacto')}}">Agregar Contacto</a></li>
                      <li><a class="nav-link dropdown-item" href="{{route('ver_contactos')}}">Ver Contacto</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fas fa-pencil-alt fa-1x"></i>
                      Materiales
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="nav-link dropdown-item" href="{{route('agregar_material')}}">Agregar Material</a></li>
                      <li><a class="nav-link dropdown-item" href="{{route('ver_materiales')}}">Ver Materiales</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fas fa-money-check-alt fa-1x"></i>
                      Ventas
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="nav-link dropdown-item" href="{{route('agregar_venta')}}">Agregar Venta</a></li>
                      <li><a class="nav-link dropdown-item" href="{{route('ver_ventas')}}">Ver Ventas</a></li>
                    </ul>
                  </li>
                </div>
              </div>
            </div>
          </nav>
    </header>
    <main class="container-fluid">
        @yield("contenido")
    </main>

    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="vendor/tinymce/js/tinymce/tinymce.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{asset('js/axios_config.js')}}"></script>

    @yield("javascript")

  </body>
</html>