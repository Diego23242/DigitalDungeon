<?php

use Illuminate\Support\Facades\Route;
// routes/web.php

use App\Http\Controllers\UserController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::post('/registro', [UserController::class, 'validarRegistro'])->name('registro');
Route::view('/categoriaccion', 'accion')->name('accion');
Route::view('/categoriaventura', 'aventura')->name('aventura');
Route::view('/categoricarro', 'carros')->name('carros');
Route::view('/comentario', 'comentario')->name('comentarios');
Route::view('/categoriaestrategia', 'estrategia')->name('estrategia');
Route::view('/login', 'login')->name('login');
Route::view('/categoriaplataformas', 'plataformas')->name('plataformas');
Route::view('/categoriaretro', 'retro')->name('retro');
Route::view('/categoriasimulacion', 'simulacion')->name('simulacion');
Route::view('/categoriaterror', 'terror')->name('terror');
Route::view('/inicio', 'index')->name('inicio');
Route::view('/registro', 'registro')->name('registros');
