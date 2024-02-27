@extends('plantilla')
@section('titulo1')
{{ 'Varias Plataformas' }}
@section('seccion')
    <div class="container mt-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item  active" aria-current="page"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Plataformas</a></li>
            </ol>
        </nav>
    </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="game-card-descuento">
                        <img src="https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/media/image/2023/06/xbox-3057336.jpg?tf=3840x" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Xbox</h4>
                            <a href="Xbox.html" class="btn btn-primary">Ir</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="game-card-descuento">
                        <img src="Img/PlayStation.jpg" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Playstation</h4>
                            <a href="playstation.html" class="btn btn-primary">Ir</a>
                        </div>
                    </div>
                </div>
            </div>
            <h1 class="title">Juegos de Xbox y Playstation</h1>
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
@stop