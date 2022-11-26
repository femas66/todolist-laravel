<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function login() {
        return view('login');
    }

    public function actionlogin(Request $request) {
        $validated = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];
        if(Auth::attempt($validated)) {
            return redirect()->route('home');
        }
        else {
            return 'Gagal';
        }
    }
}
