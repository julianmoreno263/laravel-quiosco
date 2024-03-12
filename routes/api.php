<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


//si vamos a crear aplicaciones monoliticas usamos el archivo web.php para las rutas,pero en aplicaciones que utiliaran un api para enviar datos desde el backend al frontend se usa para las rutas este archivo,las rutas comenzaran con /api/categorias


//este middleware hace que todas las rutas que coloquemos dentro de el deberan estar autenticadas para que puedan acceder,sino nos las deja acceder y aparece 404.
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//rutas, con el metodo de laravel apiResource no debemos preocuparnos por estar dandoles nombres a cada controlador para cada peticion http que vayamos a usar,como get,delete,etc, con este metodo laravel automaticamente asocia los nombres de las funciones con las peticiones http.
Route::apiResource('/categorias',CategoriaController::class);
