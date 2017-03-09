<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use Auth;

class AuthController extends Controller
{
    public function postRegister(Request $request)
    {
        $this->validate($request, [
            'username'  => 'required|alpha_dash|min:4|unique:users',
            'email'     => 'required|email|unique:users',
            'password'  => 'required|min:6|confirmed',
        ]);

        User::Create([
            'username'      => $request->input('username'),
            'email'         => $request->input('email'),
            'password'      => bcrypt($request->input('password')),
        ]);

        return response()->json(['success' => 'Sėkmingai užsiregistravot! Dabar galit prisijungti!']);

    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'login-username' => 'required',
            'login-password' => 'required',
        ]);

        if(!Auth::attempt(['username' => $request->input('login-username'), 'password' => $request->input('login-password')], $request->has('remember'))) {
            return response()->json(['error' => 'Neteisingas slapyvardis arba slaptažodis!'], 422);
        }

        return redirect()->route('home')->with('info', 'Sėkmingai prisijungei!');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('home')->with('info', 'Sėkmingai atsijungėt!');
    }
}
