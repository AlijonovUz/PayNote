@extends('layouts.app')

@section('title')
    Ro'yxatdan o'tish
@endsection

@section('body-class')
    bg-gray-50 text-slate-800 font-sans antialiased min-h-screen flex flex-col justify-center py-12 sm:px-6 lg:px-8
@endsection

@section('content')
    <div class="sm:mx-auto sm:w-full sm:max-w-md text-center">
        <div
            class="inline-flex items-center justify-center bg-indigo-600 text-white p-3 rounded-2xl shadow-indigo-200 shadow-lg mb-6">
            <i class="fa-solid fa-wallet text-2xl"></i>
        </div>
        <h2 class="text-3xl font-bold text-slate-900 tracking-tight">Ro'yxatdan o'tish</h2>
        <p class="mt-2 text-sm text-slate-500">
            O'zingizga qulay tarzda hisob yarating
        </p>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white py-8 px-6 shadow-xl shadow-slate-200/50 border border-gray-100 sm:rounded-2xl sm:px-10">
            <form class="space-y-5" action="{{ route('register.store') }}" method="POST">
                @csrf

                <!-- Full Name -->
                <div>
                    <x-form.input name="name" type="text"
                                  placeholder="Masalan: Azizbek Abdullayev" icon="fa-regular fa-user" label="To'liq ism
               (F.I.O)"/>
                </div>

                <!-- Email -->
                <div>
                    <x-form.input name="email" type="email" autocomplete="email"
                                  placeholder="example@mail.com" icon="fa-regular fa-envelope"
                                  label="Elektron pochta"/>
                </div>

                <!-- Password -->
                <div>
                    <x-form.input name="password" type="password" placeholder="••••••••" icon="fa-solid fa-lock"
                                  label="Parol"/>
                </div>

                <!-- Confirm Password -->
                <div>
                    <x-form.input name="password_confirmation" type="password" placeholder="••••••••"
                                  icon="fa-solid fa-lock"
                                  label="Parolni tasdiqlang"/>
                </div>

                <div class="mt-6 pt-6 border-t border-slate-100">
                    <p class="text-center text-xs text-slate-500 leading-relaxed">
                        Ro'yxatdan o'tishingiz bilan siz
                        <a href="{{ route('terms') }}"
                           class="text-indigo-600 hover:text-indigo-500 underline underline-offset-4 transition-colors">
                            Foydalanish shartlariga
                        </a>
                        rozilik bildirgan bo'lasiz.
                    </p>
                </div>

                <div>
                    <button type="submit"
                            class="w-full flex justify-center py-2.5 px-4 border border-transparent rounded-lg shadow-md shadow-indigo-200 text-sm font-semibold text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all active:scale-[0.98]">
                        Ro'yxatdan o'tish
                    </button>
                </div>
            </form>

            <div class="mt-6 border-t border-slate-100 pt-6">
                <p class="text-center text-sm text-slate-600">
                    Hisobingiz bormi?
                    <a href="{{ route('login') }}"
                       class="font-bold text-indigo-600 hover:text-indigo-500 transition-colors">
                        Kirish
                    </a>
                </p>
            </div>
        </div>
    </div>
@endsection
