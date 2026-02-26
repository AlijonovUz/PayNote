@extends('layouts.app')

@section('title')
    Tizimga kirish
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
        <h2 class="text-3xl font-bold text-slate-900 tracking-tight">Tizimga kirish</h2>
        <p class="mt-2 text-sm text-slate-500">
            Davom etish uchun hisobingizga kiring
        </p>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white py-8 px-6 shadow-xl shadow-slate-200/50 border border-gray-100 sm:rounded-2xl sm:px-10">
            <form class="space-y-6" action="{{ route('login.store') }}" method="POST">
                @csrf

                <!-- Email -->
                <div>
                    <x-form.input name="email" type="email" autocomplete="email"
                                  placeholder="example@mail.com" icon="fa-regular fa-envelope"
                                  label="Elektron pochta"/>
                </div>

                <!-- Password -->
                <div>
                    <x-form.input name="password" type="password"
                                  placeholder="••••••••" icon="fa-solid fa-lock" label="Parol"/>
                </div>

                <div>
                    <button type="submit"
                            class="w-full flex justify-center py-2.5 px-4 border border-transparent rounded-lg shadow-md shadow-indigo-200 text-sm font-semibold text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-all active:scale-[0.98]">
                        Kirish
                    </button>
                </div>
            </form>

            <div class="mt-6">
                <div class="relative">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-slate-100"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-white text-slate-400 font-medium whitespace-nowrap">Yoki ijtimoiy tarmoq
                            orqali</span>
                    </div>
                </div>

                <div class="mt-6">
                    <a href="{{ route('google-redirect') }}"
                       class="w-full flex items-center justify-center gap-3
              py-2.5 px-4 rounded-lg
              border border-slate-200
              bg-white
              text-sm font-semibold text-slate-900
              hover:bg-slate-50
              focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500
              transition-all active:scale-[0.98] shadow-sm">

                        <svg class="w-5 h-5" viewBox="0 0 48 48">
                            <path fill="#4285F4"
                                  d="M24 9.5c3.54 0 6.73 1.22 9.24 3.6l6.9-6.9C35.64 2.64 30.28 0 24 0 14.64 0 6.72 5.4 2.88 13.32l8.04 6.24C13.08 13.08 18.12 9.5 24 9.5z"/>
                            <path fill="#34A853"
                                  d="M46.14 24.5c0-1.64-.14-3.22-.42-4.74H24v9h12.48c-.54 2.9-2.16 5.36-4.6 7.02l7.18 5.58C43.98 37.02 46.14 31.38 46.14 24.5z"/>
                            <path fill="#FBBC05"
                                  d="M10.92 28.56A14.48 14.48 0 0 1 9.5 24c0-1.58.28-3.1.78-4.56l-8.04-6.24A23.94 23.94 0 0 0 0 24c0 3.84.92 7.46 2.52 10.8l8.4-6.24z"/>
                            <path fill="#EA4335"
                                  d="M24 48c6.48 0 11.92-2.14 15.9-5.82l-7.18-5.58c-2 1.34-4.56 2.14-8.72 2.14-5.88 0-10.92-3.58-13.08-8.58l-8.4 6.24C6.72 42.6 14.64 48 24 48z"/>
                        </svg>

                        <span>Google orqali kirish</span>
                    </a>
                </div>
            </div>
        </div>

        <p class="mt-8 text-center text-sm text-slate-600">
            Hisobingiz yo'qmi?
            <a href="{{ route('register') }}" class="font-bold text-indigo-600 hover:text-indigo-500 transition-colors">
                Ro'yxatdan o'tish
            </a>
        </p>
    </div>
@endsection
