<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class GoogleController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')
            ->redirect();
    }

    public function callback()
    {
        $google = Socialite::driver('google')->user();
        $email = $google->getEmail();

        if (!$email) {
            abort(422, "Google email bermadi.");
        }


        $user = User::where('email', $email)->first();

        if (!$user) {
            $user = User::create([
                'name' => $google->getName() ?? 'PayNote User',
                'email' => $email,
                'google_id' => $google->getId(),
                'email_verified_at' => now(),
            ]);
        } else {
            $user->update([
                'name' => $google->getName() ?? $user->name,
                'google_id' => $google->getId(),
                'email_verified_at' => $user->email_verified_at ?? now(),
            ]);
        }

        Auth::login($user);

        return redirect()->route('debt.index');
    }
}
