@extends('plantilla')
@section('titulo1')
{{ 'Carros' }}
@section('seccion')
<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item  active" aria-current="page"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="categorias.html">Categorias</a></li>
            <li class="breadcrumb-item"><a href="#">Carros</a></li>
        </ol>
    </nav>
</div>

<body>
    <div class="container">
        <h1 class="title">Autos</h1>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="game-card-descuento">
                    <img src="https://image.api.playstation.com/vulcan/ap/rnd/202211/2510/oAWEVsqIwM2Db534bhSLT6lp.png"
                        alt="Juego 1">
                    <div class="card-body">
                        <h4 class="card-title">Need for Speed™ Payback</h4>
                        <p class="card-text">Need for Speed™ Payback - Deluxe Edition te da una ventaja inicial.</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
                <div class="game-card-descuento">
                    <div class="discount-indicator">20% de descuento</div>
                    <img src="https://cdn1.epicgames.com/spt-assets/3786d94efeb348db95de16abba81e9e3/download-wrc-generations--the-fia-wrc-official-game-offer-7ihrm.jpg"
                        alt="Juego 1">
                    <div class="card-body">
                        <h4 class="card-title">WRC Generations – The FIA WRC Official Game</h4>
                        <p class="card-text">Afronta los desafíos del simulador de rallies más completo, realista y
                            exigente</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="game-card-descuento">
                    <img src="https://image.api.playstation.com/vulcan/ap/rnd/202307/2708/28833b618429cfe5f65d24ea11933ae62e3308ea7d2015be.png"
                        alt="Juego 1">
                    <div class="card-body">
                        <h4 class="card-title">The Crew™ 2</h4>
                        <p class="card-text">Adéntrate en el mundo de los deportes de motor norteamericanos</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
                <div class="game-card-descuento">
                    <img src="https://cdn1.epicgames.com/offer/b7773a08a6fa41e3a0fbc4c1e51c95a4/EGS_F123_Codemasters_S2_1200x1600-9ee0158a6d9f052deb753af836f9bd8d"
                        alt="Juego 1">
                    <div class="card-body">
                        <h4 class="card-title">F1® 23</h4>
                        <p class="card-text">Apura la frenada con EA SPORTS™ F1® 23, el videojuego oficial del 2023
                            FIA </p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="game-card-descuento">
                    <img src="https://media.vandal.net/m/28891/beamngdrive-202142916585293_17.jpg" alt="Juego 1">
                    <div class="card-body">
                        <h4 class="card-title">BeamNG.drive</h4>
                        <p class="card-text">A dynamic soft-body physics vehicle simulator capable of doing just
                            about anything.</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
                <div class="game-card-descuento">
                    <img src="https://cdn.akamai.steamstatic.com/steam/apps/635260/capsule_616x353.jpg?t=1694001671"
                        alt="Juego 1">
                    <div class="card-body">
                        <h4 class="card-title">CarX Drift Racing Online</h4>
                        <p class="card-text">CarX Drift Racing te permite sumergirte con el máximo realismo en el
                            mundo del drifting.</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="game-card-descuento">
                    <div class="discount-indicator">10% de descuento</div>
                    <img src="https://store-images.s-microsoft.com/image/apps.49179.14582624973508592.26c5f6f2-2820-4a48-be81-6d152bc5356c.48e78113-cb56-4723-8970-c4dd6a8e9ebb?q=90&w=480&h=270"
                        alt="Juego 1">
                    <div class="card-body">
                        <h4 class="card-title">Forza Horizon 4</h4>
                        <p class="card-text">Las estaciones dinámicas lo cambian todo en el mejor festival
                            automovilístico del mundo.</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
                <div class="game-card-descuento">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvnk0nrzC6BfztmyXs7ED-aLOAQiTPuBEGPwsb5xiPGA&s"
                        alt="Juego 1">
                    <div class="card-body">
                        <h4 class="card-title">Automobilista 2</h4>
                        <p class="card-text">Automobilista 2 once again puts you in the driving seat of an advanced
                            and diverse racing simulator</p>
                        <a href="carrito.html" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
            <!-- Agrega más juegos aquí -->
        </div>
    </div>
    <br>
@stop