<?php

use App\Http\Controllers\Api\BlogController;
use App\Http\Controllers\Api\PortafolioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('portafolios', PortafolioController::class);

// Ruta pública para el manejo de inicio de sesión del usuario
Route::post('/login', [AuthController::class, 'login'])->name('login');


//tatatatata
// Rutas públicas para el portafolio
//Route::get('/portafolios', [PortafolioController::class, 'index']);
//Route::get('/portafolios/{portafolio}', [PortafolioController::class, 'show']);


//tatattata


// Grupo de rutas protegidas
Route::middleware(['auth:sanctum'])->group(function () {

    // Ruta para el cierre de sesión
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


    // Ruta para el portafolio
    // Route::post('/portafolios', [PortafolioController::class, 'store']);

    // Route::put('/portafolios/{portafolio}',[PortafolioController::class, 'update']);

    // Route::delete('/portafolios/{portafolio}', [PortafolioController::class, 'destroy']);
    
});


//Rutas del blog
Route::resource('blogs', BlogController::class);

