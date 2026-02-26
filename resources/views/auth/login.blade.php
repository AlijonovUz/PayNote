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

                <div class="mt-6 grid grid-cols-2 gap-3">
                    <div>
                        <a href="#"
                           class="w-full inline-flex justify-center py-2 px-4 border border-slate-200 rounded-lg bg-white text-sm font-medium text-slate-500 hover:bg-slate-50 transition-colors shadow-sm">
                            <i class="fa-brands fa-google text-slate-400"></i>
                            <span class="sr-only">Google orqali</span>
                        </a>
                    </div>
                    <div>
                        <a href="#"
                           class="w-full inline-flex justify-center py-2 px-4 border border-slate-200 rounded-lg bg-white text-sm font-medium text-slate-500 hover:bg-slate-50 transition-colors shadow-sm">
                            <i class="fa-brands fa-apple text-slate-400"></i>
                            <span class="sr-only">Apple orqali</span>
                        </a>
                    </div>
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
