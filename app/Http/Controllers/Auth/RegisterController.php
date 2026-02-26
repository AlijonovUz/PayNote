<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function terms()
    {
        return view('auth.terms');
    }

    public function create()
    {
        return view('auth.register');
    }

    public function store(RegisterRequest $request)
    {
        $validated = $request->validated();
        $validated['password'] = Hash::make($validated['password']);
        User::create($validated);

        return redirect()->route('login');
    }
}
