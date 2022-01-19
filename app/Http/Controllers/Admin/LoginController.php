<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Requests\Admin\LoginRequest;

class LoginController extends Controller
{
    public function index(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        $remember = ($request->remember) ? true : false;

        if (Auth::attempt($credentials, $remember)) {
            // Authentication passed...
            return redirect()->intended('lotus');
        }

        return back()
        ->withInput($request->input())
        ->withErrors([
            'email' => 'Estas credenciales no coinciden con nuestros registros.',
        ]);
    }
}
