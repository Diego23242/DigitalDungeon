<@extends('plantilla')
@section('titulo1')
{{ 'Estrategia' }}
@section('seccion')
    <div class="container mt-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item  active" aria-current="page"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="categorias.html">Categorias</a></li>
                <li class="breadcrumb-item"><a href="#">Estrategia</a></li>
            </ol>
        </nav>
    </div>

    <body>
        <div class="container">
            <h1 class="title">Estrategia</h1>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card-descuento">
                        <img style="width: 300px; height: 300px;"
                            src="https://1.bp.blogspot.com/-P-CCmK0Wncw/W1CapTZU17I/AAAAAAAAa_M/H4VyeqllIYQH-JCUAf02JJH99w0eMBmmQCLcBGAs/s1600/pic2601683_md.jpg"
                            alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Mysterium</h4>
                            <p class="card-text">Encuentra pistas del asesino</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card-descuento">
                        <div class="discount-indicator">10% de descuento</div>
                        <img style="width: 300px; height: 300px;"
                            src="https://cdn.ligadegamers.com/imagenes/mejores-juegos-estrategia-pc-og.jpg"
                            alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title"> Age Of Empires</h4>
                            <p class="card-text">Estrategia en la era merieval</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card-descuento">
                        <img style="width: 300px; height: 300px;" src="Img/Bad North.jpg" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Bad North</h4>
                            <p class="card-text">Bad North es un roguelite táctico en tiempo real encantador pero brutal
                            </p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card-descuento">
                        <img style="width: 300px; height: 300px;" src="Img/Fallout Shelter.jpg" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title"> Fallout Shelter</h4>
                            <p class="card-text">Fallout Shelter te pone al mando de un refugio subterráneo Vault-Tec de
                                última generación.</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card-descuento">
                        <div class="discount-indicator">15% de descuento</div>
                        <img style="width: 300px; height: 300px;"
                            src="https://i.ytimg.com/vi/vAbY68o_8ew/maxresdefault.jpg" alt="Juego 2">
                        <div class="card-body">
                            <h4 class="card-title">EVE Online</h4>
                            <p class="card-text">Conquista el universo</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card-descuento">
                        <img style="width: 300px; height: 300px;"
                            src="https://cdn.cloudflare.steamstatic.com/steam/apps/1142710/header.jpg?t=1703199063"
                            alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Warhammer</h4>
                            <p class="card-text">El imperio te necesita</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card-descuento">
                        <img style="width: 300px; height: 300px;"
                            src="Img/Football Manager.jpg" alt="Juego 2">
                        <div class="card-body">
                            <h4 class="card-title">Football Manager 2024</h4>
                            <p class="card-text">Ponte en el lugar de un auténtico directivo y gestiona los mejores
                                equipos del mundo </p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card-descuento">
                        <img style="width: 300px; height: 300px;"
                            src="Img/Halo Wars 2.jpg"
                            alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Halo Wars 2</h4>
                            <p class="card-text">Es la experiencia Halo con la que has soñado: controlar ejércitos
                                enteros de Marines, Warthogs, tanques Scorpion y Spartans</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>


                <!-- Agrega más juegos aquí -->
            </div>
        </div>
@stop