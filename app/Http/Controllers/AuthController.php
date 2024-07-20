<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function showCode () {
        return view('auth.Code');
    }
    
    public function showLogin () {
        return view('auth.login');
    }
    public function showRegister () {
        return view('auth.register');
    }
    public function login(Request $request){
            if(Auth::attempt($request->only('email','password'))){
                return to_route('quiz.index');
            }
            return redirect('/');
    }

    // Menangani pendaftaran
    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = new User;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('login')->with('success', 'Registration successful. Please login.');
    }


    // public function logout(){
    //     Auth::logout();
    //     return view('auth.login');
    // }

    public function logout(Request $request)
    {
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return view('auth.login');
    }
}
