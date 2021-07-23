@extends("layouts.base")

@section("contenido")
    <div class="row mt-5">
        <div class="col-12 col-md-6 col-lg-5 mx-auto">
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-address-book fa-2x"></i>
                    <span>Bienvenido Prístina!</span>
                </div>
                <div class="card-body">
                    <p>Este es tu sitio web, diseñado a medida</p>
                </div>
                <div class="card-footer">
                    <nav class="redes-sociales pt-3">
                        <ul>
                            <li>
                                <a target="_blank"href="https://www.facebook.com/pristina.macrame/">
                                    <img src="img/facebook.png" alt="facebook-logo">
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.instagram.com/pristina.macrame/">
                                    <img src="img/instagram.png" alt="instagram-logo">
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("javascript")
    <script src="{{asset('js/index.js')}}"></script>
@endsection