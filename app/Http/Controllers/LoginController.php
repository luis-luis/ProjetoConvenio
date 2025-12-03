<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function showLogin()
    {

        dd(extension_loaded('pdo_pgsql'));

        // $animais = Animal::all();
        // dd($animais);

        return view('auth.login');

    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $remember = $request->filled('remember');
        if (Auth::attempt($request->only('email', 'password'), $remember)) {

            $user = Auth::user();

            if ($user->role === 'tutor') {
                return redirect()->intended(route('tutor.dashboard'));
            }

            if ($user->role === 'credenciada') {
                return redirect()->intended(route('credenciada.dashboard'));
            }
        }

        return back()->with('error', 'Credenciais inválidas.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('site.index');
    }
}
