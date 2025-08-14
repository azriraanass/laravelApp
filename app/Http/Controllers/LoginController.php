<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController
{
    public function create(): View
    {
        return view("auth.login");
    }

    public function store(Request $request): RedirectResponse
    {
        $validateAttributs = $request->validate([
            "email" => ["required", "email"],
            "password" => ["required"],
        ]);

        Auth::attempt($validateAttributs);
        $request->session()->regenerate();

        return redirect()->route("home");
    }

    public function destroy(): RedirectResponse
    {
        Auth::logout();
        return redirect()->route("produits.index");
    }
}
