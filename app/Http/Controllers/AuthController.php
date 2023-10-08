<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profile;
use App\Http\Requests\registerRequest;
use App\Http\Requests\loginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }
    public function registerCompte(registerRequest $request){
        $dataToInsert['nom'] = $request ->nom;
        $dataToInsert['prenom'] = $request ->prenom;
        $dataToInsert['email'] = $request ->email;
        $dataToInsert['password'] = Hash::make($request ->password) ;
        profile::create($dataToInsert);
        return Redirect()->route('login_gmao');
    }
    public function login(){
        return view ('login');
    }
    public function loginCompte(loginRequest $request){
        $email = $request -> email; 
        $password = $request -> password;
        $values = ['email' => $email, 'password'=> $password];
        if(Auth::attempt($values)){
            $request->session()->regenerate();
            return Redirect()->route('index');
        }else{
            return Back()->withErrors([
                'email'=>'email ou mot de passe incorrect'
            ])->onlyInput('email');
        }
}
}
