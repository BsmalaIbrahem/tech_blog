<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\authRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('auth');
    }

    public function register(authRequest  $request){
        User::create(array_merge(
            $request->all(),
            ['password' => Hash::make($request->password)]
        ));
        Auth()->login();
        return redirect()->route('index');

    }

    public function login(Request $request){
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth()->attempt($data)){
            $request->session()->regenerate();
            return redirect()->route('index');
        }
        return redirect('auth')->withErrors(['error' => 'email or password is wrong']);

    }

    public function logout(){
        Auth()->guard('web')->logout();
        return redirect()->route('authForm');
    }

}
