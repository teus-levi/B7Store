<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\State;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(){
        return view('auth.register');
    }

    //trocando o objeto Request pelo RegisterRequest criado para validação de atributos
    public function register_action(RegisterRequest $request){
        $userData = $request->only(['name', 'email', 'password']);
        $userData['password'] = Hash::make($userData['password']);
        $user = User::create($userData);

        Auth::loginUsingId($user->id);
        return redirect()->route('select-state');
    }


    public function select_state(){
        $data['states'] = State::all();
        return view('auth.select-state', $data);
    }

    public function select_state_action(Request $request){
        $data = $request->only(['state']);
        $stateRegister = State::find($data['state']);

        if(!$stateRegister){
            return redirect('/login');
        }
        $user = Auth::user();
        $user->state_id = $stateRegister->id;
        $user->save();
        return redirect()->route('home');
    }

    public function login_action(LoginRequest $request){
        $loginData = $request->only(['email', 'password']);

        if(!Auth::attempt($loginData)){
            $data['message'] = "Usuário e/ou Senha inválidos";
            $data['email'] = $loginData['email'];
            return view('auth.login', $data);

        }

        return redirect()->route('home');
    }


}
