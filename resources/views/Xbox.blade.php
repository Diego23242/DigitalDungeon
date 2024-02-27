@extends('plantilla')
@section('titulo1')
{{ 'Xbox' }}
@section('seccion')
    <div class="container mt-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item  active" aria-current="page"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="vplataformas.html">Plataformas</a></li>
                <li class="breadcrumb-item"><a href="#">Xbox</a></li>
            </ol>
        </nav>
        <div class="container">
            <h1 class="title">Juegos</h1>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card-descuento">
                        <div class="discount-indicator">10% de descuento</div>
                        <img src="Img/halo_reach.jpg" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Halo Reach</h4>
                            <p class="card-text">Shooter con Multijugador</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card">
                        <img src="Img/kof.jpg" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">The King of Fighters</h4>
                            <p class="card-text">Juego de Peleas</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card">
                        <img src="Img/two.jpg" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Army of Two The  Devil's Cartel</h4>
                            <p class="card-text">Acción con Tiro</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card-descuento">
                        <div class="discount-indicator">15% de descuento</div>
                        <img src="Img/far_cry.jpg" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Far Cry 6</h4>
                            <p class="card-text">Juego de Supervivencia</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card">
                        <img src="Img/devil.jpg" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Devil May Cry HD Collection</h4>
                            <p class="card-text">Hack and Slash</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card">
                        <img src="Img/devil5.jpg" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Devil May Cry 5</h4>
                            <p class="card-text">Hack and Slash</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card">
                        <img src="Img/Tekken.jpg" alt="Juego 2">
                        <div class="card-body">
                            <h4 class="card-title">Tekken 7</h4>
                            <p class="card-text">Juego de Peleas</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card-descuento">
                        <div class="discount-indicator">20% de descuento</div>
                        <img src="Img/metro.jpg" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Metro Exodus</h4>
                            <p class="card-text">Acción con Tiro</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
         <!-- Agrega más juegos aquí -->
            </div>
        </div>
    </div>
@stop