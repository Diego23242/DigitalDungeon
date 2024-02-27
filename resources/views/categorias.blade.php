@extends('plantilla')
@section('titulo1')
{{ 'Categorias' }}
@section('seccion')
    <div class="container mt-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item  active" aria-current="page"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Categorias</a></li>
            </ol>
        </nav>
    </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="game-card-descuento">
                        <img src="Img/Call of Duty_ Black Ops III [2015].jpg" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Accion</h4>
                            <a href="accion.html" class="btn btn-primary">Ir</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="game-card-descuento">
                        <img src="Img/reddead.jpg" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Aventura</h4>
                            <a href="aventura.html" class="btn btn-primary">Ir</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="game-card-descuento">
                        <img src="Img/donkey.jpg" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Retro</h4>
                            <a href="retro.html" class="btn btn-primary">Ir</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="game-card-descuento">
                        <img src="https://upload.wikimedia.org/wikipedia/en/0/04/Hollow_Knight_first_cover_art.webp" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Plataformas</h4>
                            <a href="plataformas.html" class="btn btn-primary">Ir</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="game-card-descuento">
                        <img src="Img/poppy1.jpg" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Terror</h4>
                            <a href="retro.html" class="btn btn-primary">Ir</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="game-card-descuento">
                        <img src="https://i.ytimg.com/vi/vAbY68o_8ew/maxresdefault.jpg" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Estrategia</h4>
                            <a href="estrategia.html" class="btn btn-primary">Ir</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="game-card-descuento">
                        <img src="https://cdn-products.eneba.com/resized-products/ZnCbfaV_350x200_3x-0.jpg" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Simulación</h4>
                            <a href="simulacion.html" class="btn btn-primary">Ir</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="game-card-descuento">
                        <img src="https://cdn.akamai.steamstatic.com/steam/apps/635260/capsule_616x353.jpg?t=1694001671" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Carros</h4>
                            <a href="carros.html" class="btn btn-primary">Ir</a>
                        </div>
                    </div>
                </div>
                <!-- Agrega más juegos aquí -->
            </div>
        </div>
        <br>
@stop