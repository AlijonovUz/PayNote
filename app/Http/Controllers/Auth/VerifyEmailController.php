<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

class VerifyEmailController extends Controller
{
    public function notice(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();
        return view('auth.verify-email');
    }

    public function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();
        return redirect()->route('debt.index');
    }

    public function resend(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();
        return back();
    }
}
