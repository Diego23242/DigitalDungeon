@extends('plantilla')
@section('titulo1')
{{ 'Acción' }}
@section('seccion')
    <div class="container mt-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item  active" aria-current="page"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="categorias.html">Categorias</a></li>
                <li class="breadcrumb-item"><a href="#">Acción</a></li>
            </ol>
        </nav>
    </div>
        <div class="container">
            <h1 class="title">Accion</h1>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card-descuento">
                        <div class="discount-indicator">10% de descuento</div>
                        <img src="{{ asset('Img/Call of Duty_ Black Ops III [2015].jpg') }}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Call Of Duty Black Ops 3</h4>
                            <p class="card-text">Multijugador de disparos.</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card-descuento">
                        <img src="{{ asset('Img/Counter Strike Global Offensive (CSGO).jpg') }}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Counter Strike Global Offensive</h4>
                            <p class="card-text">Disparos por equipo</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card-descuento">
                        <img src="{{ asset('https://image.api.playstation.com/vulcan/ap/rnd/202209/0617/eiXonwxcJH00bkGo3G6lUm9t.png') }}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Rainbow Six® Siege</h4>
                            <p class="card-text">Shooter táctico realista.</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card-descuento">
                        <div class="discount-indicator">15% de descuento</div>
                        <img src="{{ asset('https://assetsio.reedpopcdn.com/co2dhb.jpg?width=1200&height=1200&fit=bounds&quality=70&format=jpg&auto=webp') }}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">DayZ</h4>
                            <p class="card-text">Tierra plagada de zombis infectados</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card-descuento">
                        <img src="{{ asset('Img/COD BO2.jpg') }}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Call Of Duty Black Ops 2</h4>
                            <p class="card-text">Shooter de disparos</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card-descuento">
                        <img src="{{ asset('Img/pubg-battlegrounds.png') }}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">PUBG: BATTLEGROUNDS</h4>
                            <p class="card-text">BattleRoyal</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card-descuento">
                        <img src="{{ asset('Img/descarga (16).jpg') }}" alt="Juego 2">
                        <div class="card-body">
                            <h4 class="card-title">Dante's Inferno</h4>
                            <p class="card-text">Accion merieval</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card-descuento">
                        <div class="discount-indicator">20% de descuento</div>
                        <img src="{{ asset('Img/God of War, diez años de Dioses y venganzas.jpg') }}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">God of War</h4>
                            <p class="card-text">Acaba con los Dioses</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <!-- Agrega más juegos aquí -->
            </div>
        </div>
        <br>
@stop