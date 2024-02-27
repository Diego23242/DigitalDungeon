@extends('plantilla')
@section('titulo1')
{{ 'Accesorios' }}
@section('seccion')
    <div class="container mt-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item  active" aria-current="page"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Accesorios</a></li>
            </ol>
        </nav>
    </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="game-card-descuento">
                        <img src="{{ asset('Img/audifonos2.jpg') }}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <a href="audifonos.html" class="btn btn-primary">Ir a Audifonos</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="game-card-descuento">
                        <img src="{{ asset('Img/mando2.jpg') }}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title"></h4>
                            <a href="mandos.html" class="btn btn-primary">Ir a Mandos</a>
                        </div>
                    </div>
                </div>
            </div>
            <h1 class="title">Accesorios</h1>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card-descuento">
                        <img src="{{ asset('Img/audifonos2.jpg') }}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">HyperX HHSS1C-KB-WT/G HyperX Cloud Stinger Core Auriculares Inalámbricos para PS4, PC, Ligeros, Deslizadores de Acero Duraderos, Micrófono con Cancelación de Ruido, Color Blanco, Over Ear</h4>
                            <p class="card-text">$1,099.00</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card-descuento">
                        <img src="{{ asset('Img/mando2.jpg') }}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Control Inalámbrico Dualsense Midnight Black - Playstation 5 - Midnight Black Edition</h4>
                            <p class="card-text">$1,339.00</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card-descuento">
                        <img src="{{ asset('Img/mando3.jpg') }}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Control alámbrico PowerA Advantage para Xbox Series X|S oficial de Xbox - Limonada rosa Edition/h4>
                            <p class="card-text">$828.69</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card-descuento">
                        <div class="discount-indicator">20% de descuento</div>
                        <img src="{{ asset('Img/audifonos8.jpg') }}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">HyperX Cloud II Wireless Audífonos Inalámbricos Para Videojuegos</h4>
                            <p class="card-text">$1,840.00</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card-descuento">
                        <img src="{{ asset('Img/audifonos5.jpg') }}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">JBL Audífonos Gamer Over Ear Quantum 100 con Micrófono Extraíble</h4>
                            <p class="card-text">$673.00</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card-descuento">
                        <img src="{{ asset('Img/mando6.jpg') }}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Redlemon Cargador para Controles de PS5, Estación de Carga Dual para Controles de Playstation 5 Dualsense</h4>
                            <p class="card-text">$415.00</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card-descuento">
                        <img src="{{ asset('Img/mando7.jpg') }}" alt="Juego 2">
                        <div class="card-body">
                            <h4 class="card-title">Control Inalámbrico Xbox - Robot White</h4>
                            <p class="card-text">$1,099.00</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card-descuento">
                        <div class="discount-indicator">20% de descuento</div>
                        <img src="{{ asset('Img/mandos8.jpg') }}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Control inalámbrico DualSense™ – Grey Camouflage - Grey Camouflage Edition</h4>
                            <p class="card-text">$1,390.00</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card-descuento">
                        <div class="discount-indicator">10% de descuento</div>
                        <img src="{{ asset('Img/audifonos1.jpg') }}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Skullcandy Hesh Evo Cascos Over-Ear Inalámbricos, 36 h de Autonomía, Micrófono, Compatibles con iPhone Android y Dispositivos Bluetooth, Negro</h4>
                            <p class="card-text">$1,668.14</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card-descuento">
                        <div class="discount-indicator">10% de descuento</div>
                        <img src="{{ asset('Img/mando1.jpg') }}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">PowerA Enhanced Wired Controller para Xbox Series X | S - Royal Purple, Gamepad - Standard Edition</h4>
                            <p class="card-text">$575.00</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card-descuento">
                        <img src="{{ asset('Img/audifonos3.jpg') }}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Logitech G733 LIGHTSPEED Audífonos Inalámbricos Gaming, LIGHTSPEED, RGB LIGHTSYNC, tecnología de micrófono Blue VO!CE, batería de 29 horas, tecnología DTS Headphone:X 2.0., PC, PS4 - Negro</h4>
                            <p class="card-text">$2,788.32</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card-descuento">
                        <div class="discount-indicator">15% de descuento</div>
                        <img src="{{ asset('Img/audifonos4.jpg') }}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Akane Audífonos Inalámbricos de Diadema Bluetooth Ultra High Definition con Micrófono Extraíble USB-C, Batería de Larga Duración hasta 48 Hrs de Uso, Audífonos Manos Libres Plegables, Mod. OF-2000</h4>
                            <p class="card-text">$699.00</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card-descuento">
                        <img src="{{ asset('Img/mando5.jpg') }}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">PowerA Control Mejorado Alámbrico para Nintendo Switch - Mario Pop Art - Standard Edition</h4>
                            <p class="card-text">$658.15</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card-descuento">
                        <img src="{{ asset('Img/audifonos6.jpg') }}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">Game Factor HSB600 Audifonos Inalambricos Gamer 2.4GHz Tipo Diadema Bluetooth Almohadillas y Banda de Ajuste Suaves Micrófono Flexible Desmontable Control de Volumen con Luz LED 3.5 mm Sonido Envolvente Color Blanco</h4>
                            <p class="card-text">$415.00</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="game-card-descuento">
                        <img src="{{ asset('Img/audifonos7.jpg') }}" alt="Juego 2">
                        <div class="card-body">
                            <h4 class="card-title">Razer BlackShark V2 Pro - Blanco Audifonos gamer inalámbricos sonido envolvente espacial THX 7.1, controladores de 1.97 pulgadas</h4>
                            <p class="card-text">$3,433.62</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                    <div class="game-card-descuento">
                        <div class="discount-indicator">15% de descuento</div>
                        <img src="{{ asset('Img/mando4.jpg') }}" alt="Juego 1">
                        <div class="card-body">
                            <h4 class="card-title">KAMYSEN Pro Controller Inalámbrico，Mando para Nintendo Switch，Controlador Inalámbrico para Nintendo Switch,Gamepad Bluetooth con Turbo, Gyro Axis y Gamepad de Doble Vibración,para Nintendo Switch y PC.</h4>
                            <p class="card-text">$359.00</p>
                            <a href="carrito.html" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
                <!-- Agrega más juegos aquí -->
            </div>
        </div>
        <br>
@stop