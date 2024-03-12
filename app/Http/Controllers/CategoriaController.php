<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Http\Resources\CategoriaCollection;

class CategoriaController extends Controller
{
    public function index(){

        //asi podemos enviar una respuesta json de los datos de la bd al front,usando el metodo response,json y el modelo de Categoria. Ahora esta forma esta bien,pero laravel tiene API Resources que es una forma de controlar mejor la respuesta json que vamos a enviar,podemos decidir que informacion queremos enviar,para no tener que enviar todo,para esto usamos en la terminal: php artisan make:resources CategoriaCollection y tambien se crea otro archivo: php artisan make:resource CategoriaResource,que este es el que nos va a permitir decidir que campos vamos a retornar.Estos se guardan en app/http/resources.
        // return response()->json(['categorias'=>Categoria::all()]);

        //utilizando la forma de resource
        return new CategoriaCollection(Categoria::all());
    }
}
