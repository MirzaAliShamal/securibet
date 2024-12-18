<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.auth.login', get_defined_vars());
    }

    public function store(Request $req)
    {
        $req->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (! Auth::attempt(['email' => $req->email, 'password' => $req->password, 'role' => 'admin'])) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }

        $req->session()->regenerate();
        return redirect()->intended(RouteServiceProvider::ADMIN);
    }

    public function logout(Request $req)
    {
        Auth::guard('web')->logout();

        $req->session()->invalidate();

        $req->session()->regenerateToken();

        return redirect('/');
    }
}
