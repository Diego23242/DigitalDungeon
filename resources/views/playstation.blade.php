@extends('plantilla')
@section('titulo1')
{{ 'Playsation' }}
@section('seccion')
                <div class="container mt-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item  active" aria-current="page"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="vplataformas.html">Plataformas</a></li>
                        <li class="breadcrumb-item"><a href="#">PlayStation</a></li>
                    </ol>
            </nav>
            <div class="container">
                <h1 class="title">Juegos</h1>
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="game-card-descuento">
                            <div class="discount-indicator">10% de descuento</div>
                            <img src="Img/final_fantasy.jpg" alt="Juego 1">
                            <div class="card-body">
                                <h4 class="card-title">Final Fantasy 7</h4>
                                <p class="card-text">Juego de Rol</p>
                                <a href="carrito.html" class="btn btn-primary">Comprar</a>
                            </div>
                        </div>
                        <div class="game-card">
                            <img src="Img/god_of_war.jpg" alt="Juego 1">
                            <div class="card-body">
                                <h4 class="card-title">God of War Ragnarok</h4>
                                <p class="card-text">Viaje del Dios de la Guerra</p>
                                <a href="carrito.html" class="btn btn-primary">Comprar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="game-card">
                            <img src="Img/gran_turismo.jpg" alt="Juego 1">
                            <div class="card-body">
                                <h4 class="card-title">Gran Turismo</h4>
                                <p class="card-text">Juego de Carreras</p>
                                <a href="carrito.html" class="btn btn-primary">Comprar</a>
                            </div>
                        </div>
                        <div class="game-card-descuento">
                            <div class="discount-indicator">15% de descuento</div>
                            <img src="Img/spiderman.jpg" alt="Juego 1">
                            <div class="card-body">
                                <h4 class="card-title">Spiderman 2</h4>
                                <p class="card-text">Juega como Spiderman</p>
                                <a href="carrito.html" class="btn btn-primary">Comprar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="game-card">
                            <img src="Img/one_punch_man.jpg" alt="Juego 1">
                            <div class="card-body">
                                <h4 class="card-title">One Punch Man</h4>
                                <p class="card-text">Juego de Peleas</p>
                                <a href="carrito.html" class="btn btn-primary">Comprar</a>
                            </div>
                        </div>
                        <div class="game-card">
                            <img src="Img/god_of_war_nino.jpg" alt="Juego 1">
                            <div class="card-body">
                                <h4 class="card-title">God of War</h4>
                                <p class="card-text">Lucha como el Dios de la Guerra</p>
                                <a href="carrito.html" class="btn btn-primary">Comprar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="game-card">
                            <img src="Img/the_last_of_us.jpg" alt="Juego 2">
                            <div class="card-body">
                                <h4 class="card-title">The Last of Us</h4>
                                <p class="card-text">Juego de zombis</p>
                                <a href="carrito.html" class="btn btn-primary">Comprar</a>
                            </div>
                        </div>
                        <div class="game-card-descuento">
                            <div class="discount-indicator">20% de descuento</div>
                            <img src="Img/gta5.jpg" alt="Juego 1">
                            <div class="card-body">
                                <h4 class="card-title">Grand Theft Auto 5</h4>
                                <p class="card-text">Juego de Mundo Abierto</p>
                                <a href="carrito.html" class="btn btn-primary">Comprar</a>
                            </div>
                        </div>
                    </div>
             <!-- Agrega más juegos aquí -->
                </div>
            </div>
        </div>
@stop