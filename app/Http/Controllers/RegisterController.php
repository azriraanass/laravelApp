<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;

class RegisterController
{
    public function create(): View
    {
        return view("auth.register");
    }

    public function store(Request $request): RedirectResponse
    {
        $validateAttributs = $request->validate([
            "name" => ["required"],
            "email" => ["required", "email"],
            "password" => [
                "required",
                "confirmed",
                Password::min(8)->numbers()->letters(),
            ],
        ]);

        $userInstance = User::create($validateAttributs);
        Auth::login($userInstance);

        return redirect()->route("home");
    }
}
