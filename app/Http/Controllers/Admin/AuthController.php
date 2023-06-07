<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Illuminate\Contracts\Auth\Authenticatable;


class AuthController extends Controller
{
    public function index(){
        return view('admin.login');
    }

    public function login(Request $request){
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth()->guard('admin')->attempt($data)){
            $request->session()->regenerate();
            return redirect()->route('admin.index');
        }
        return view('admin.login')->withErrors(['error' => 'email or password is wrong']);

    }

    public function logout(){
        Auth()->guard('admin')->logout();
        return redirect()->route('admin.loginForm');
    }
}
