<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegistroRequest;

class AuthController extends Controller
{

    public function register(RegistroRequest $request){

        //validar el registro
        $data=$request->validated();
    }

    public function login(Request $request){
        
    }

    public function logout(Request $request){

    }
}
