@extends('plantilla')
@section('titulo1')
{{ 'Simulacion' }}
@section('seccion')
<link rel="stylesheet" href="{{ asset('CSS/accion.css') }}">
    <div class="container mt-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item  active" aria-current="page"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="categorias.html">Categorias</a></li>
                <li class="breadcrumb-item"><a href="#">Simulación</a></li>
            </ol>
        </nav>
    </div>
    <div class="container">
        <h1 class="title">Simulacion</h1>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="game-card-descuento">
                    <div class="discount-indicator">20% de descuento</div>
                    <img src="https://sm.ign.com/ign_latam/cover/c/cities-sky/cities-skylines-ii_zba9.jpg"
                        alt="Juego 1">
                    <div class="card-body">
                        <h4 class="card-title">Cities: Skylines II</h4>
                        <p class="card-text">Construye una ciudad y haz que prospere con el constructor de ciudades más
                            realista.</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
                <div class="game-card-descuento">
                    <div class="discount-indicator">10% de descuento</div>
                    <img src="https://img.hype.games/cdn/46770c84-f794-4912-a3c7-ab4accc21c10COVER%20Forza%20Horizon%205%20Standard%20Edition.png"
                        alt="Juego 1">
                    <div class="card-body">
                        <h4 class="card-title">Forza Horizon 5</h4>
                        <p class="card-text">Explora los vibrantes paisajes del mundo abierto de México</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="game-card-descuento">
                    <img src="https://m.media-amazon.com/images/I/71s3WY8EB4L._AC_UF1000,1000_QL80_.jpg" alt="Juego 1">
                    <div class="card-body">
                        <h4 class="card-title">Fishing Planet</h4>
                        <p class="card-text">Fishing Planet® es un simulador de pesca multijugador</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
                <div class="game-card-descuento">
                    <img src="https://cdn-products.eneba.com/resized-products/ZnCbfaV_350x200_3x-0.jpg" alt="Juego 1">
                    <div class="card-body">
                        <h4 class="card-title">Arma 3</h4>
                        <p class="card-text">Combate realista en un enorme mundo abierto militar.</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="game-card-descuento">
                    <img src="https://image.api.playstation.com/vulcan/ap/rnd/202305/1816/8e0bcf8f41de57812a8f462542b8147c8455972b8a8b298e.jpg"
                        alt="Juego 1">
                    <div class="card-body">
                        <h4 class="card-title">Hell Let Loose</h4>
                        <p class="card-text">Shooter bestial en primera persona ambientado en la II Guerra Mundial</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
                <div class="game-card-descuento">
                    <img src="Img/Counter Strike Global Offensive (CSGO).jpg" alt="Juego 1">
                    <div class="card-body">
                        <h4 class="card-title">CSGO</h4>
                        <p class="card-text">Terroristas vs Swat</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="game-card-descuento">
                    <img src="Img/descarga (16).jpg" alt="Juego 2">
                    <div class="card-body">
                        <h4 class="card-title">Dante´s Inferno</h4>
                        <p class="card-text">Batallas merievales</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
                <div class="game-card-descuento">
                    <div class="discount-indicator">20% de descuento</div>
                    <img src="Img/God of War, diez años de Dioses y venganzas.jpg" alt="Juego 1">
                    <div class="card-body">
                        <h4 class="card-title">God of War</h4>
                        <p class="card-text">Destructor de dioses</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <!-- Agrega más juegos aquí -->
        </div>
    </div>
@stop