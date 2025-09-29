<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class AuthController extends Controller
{
    public function showLogin (){
        return view('login');
    }
    public function login (Request $request){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)){
            $user = Auth::user();
            if($user->role === 'admin'){
                return redirect()-> route('dashboard');
            }else{
                Auth::logout();
                return back()->withErrors(['email' => 'No tenes permiso']);
            }
        }
        return back()->withErrors(['email' => 'Información incorrecta']);
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
