@extends('plantilla')
@section('titulo1')
{{ 'Aventura' }}
@section('seccion')
    <div class="container mt-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item  active" aria-current="page"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="categorias.html">Categorias</a></li>
                <li class="breadcrumb-item"><a href="#">Aventura</a></li>
            </ol>
        </nav>
        </div>
        <div class="container">
            <h1 class="title">Aventura</h1>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card-descuento">
                        <img src="Img/Carátula oficial de Minecraft PC en 3DJuegos.jpg" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Minecraft</h4>
                            <p class="card-text">Mundo abierto</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card-descuento">
                        <div class="discount-indicator">10% de descuento</div>
                        <img src="Img/Portal 2 (PC_Mac DVD) [Importación inglesa].jpg" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Portal 2</h4>
                            <p class="card-text">El verdadero reto</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card-descuento">
                        <img src="Img/Crash Twinsanity.jpg" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Crash Twinsanity</h4>
                            <p class="card-text">Juego en 2d</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card-descuento">
                        <img src="Img/descarga (17).jpg" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Zelda</h4>
                            <p class="card-text">La aventura comienza</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card-descuento">
                        <div class="discount-indicator">20% de descuento</div>
                        <img src="Img/reddead.jpg" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Red Dead Redemption 2</h4>
                            <p class="card-text">Accion en el Viejo Oeste</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card-descuento">
                        <img src="https://image.api.playstation.com/vulcan/ap/rnd/202011/0919/cDHU28ds7cCvKAnVQo719gs0.png"
                            alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Hogwarts Legacy</h4>
                            <p class="card-text">RPG inmersivo de acción en mundo abierto.</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card-descuento">
                        <img src="Img/elder.jpg" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">The Elder Scrolls® Online</h4>
                            <p class="card-text">RPG multijugador online y vive una aventura sin límites</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card-descuento">
                        <img src="Img/the-last-of-us-parte-1.jpg"
                            alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">The Last of Us™ Parte I</h4>
                            <p class="card-text">Disfruta de la emotiva historia y los inolvidables personajes de The
                                Last of Us</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <!-- Agrega más juegos aquí -->
            </div>
        </div>
        <br>
@stop