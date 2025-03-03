<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('auth.register');
    }

    //trocando o objeto Request pelo RegisterRequest criado para validação de atributos
    public function register_action(RegisterRequest $request){
        echo 'O código chegou até aqui';
        dd($request);
    }
}
