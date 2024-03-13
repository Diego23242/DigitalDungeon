@extends('plantilla')
@section('titulo1')
{{ 'Retro' }}
@section('seccion')
<link rel="stylesheet" href="{{ asset('CSS/accion.css') }}">
    <div class="container mt-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item  active" aria-current="page"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="categorias.html">Categorias</a></li>
                <li class="breadcrumb-item"><a href="#">Retro</a></li>
            </ol>
        </nav>
        </div>
        <div class="container">
            <h1 class="title">Retro</h1>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card-descuento">
                        <img src="Img/mariobros.png" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Super Mario Bros</h4>
                            <p class="card-text">Juego de plataformas</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card-descuento">
                        <img src="Img/contra.jpg" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Contra</h4>
                            <p class="card-text">Disparos en 2d</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card-descuento">
                        <img src="https://i.3djuegos.com/juegos/15536/the_king_of_fighters___039_97_global_match/fotos/ficha/the_king_of_fighters___039_97_global_match-4004267.webp"
                            alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">The King of Fighters '97 Global Match</h4>
                            <p class="card-text">Peleas 1 vs 1</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card-descuento">
                        <img src="Img/sonic.png" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Sonic the Hedgehog 2</h4>
                            <p class="card-text">Aventura en 2d</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card-descuento">
                        <img src="Img/metalslug.jpg" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Metal Slug</h4>
                            <p class="card-text">Accion en 2d</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card-descuento">
                        <img src="Img/MetalSlug2.jpg"
                            alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Metal Slug 2</h4>
                            <p class="card-text">Accion pura</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card-descuento">
                        <img src="Img/metal3.jpg" alt="Juego 2">
                        <div class="card-body">
                            <h4 class="card-title">Metal Slug 3</h4>
                            <p class="card-text">Pura diversion y accion</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card-descuento">
                        <div class="discount-indicator">15% de descuento</div>
                        <img src="Img/donkey.jpg" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Donkey Kong Country</h4>
                            <p class="card-text">Accion en plataformas</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <!-- Agrega más juegos aquí -->
            </div>
        </div>
@stop