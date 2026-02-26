<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request)
    {
        $credentials = $request->validated();

        if (!Auth::attempt($credentials)) {
            return back()->withErrors([
                'email' => "Taqdim etilgan ma'lumotlar bizning yozuvlarimizga mos kelmaydi."
            ])->onlyInput('email');
        }

        $request->session()->regenerate();
        $user = Auth::user();

        if ($user->hasVerifiedEmail()) {
            return redirect()->route('verification.notice');
        }

        return redirect()->route('debt.index');
    }

    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();

        return redirect()->route('login');
    }
}
