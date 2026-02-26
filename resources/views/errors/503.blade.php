@extends('layouts.app')

@section('title', '503 - Texnik ishlar')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-slate-50/50 px-4">
        <div class="max-w-md w-full text-center space-y-8 py-12">

            <div class="relative inline-block">
                <div class="text-8xl sm:text-9xl font-black text-amber-100 select-none">
                    503
                </div>
                <div class="absolute -top-5 sm:-top-8 right-0 sm:right-2 text-5xl sm:text-7xl animate-pulse text-amber-500">
                    <i class="fa-solid fa-gear"></i>
                </div>
            </div>

            <div class="space-y-4">
                <h1 class="text-3xl sm:text-4xl font-bold text-slate-800">
                    Texnik ishlar
                </h1>

                <p class="text-base sm:text-lg text-slate-600">
                    Saytni yangilash ishlari davom etmoqda.<br>
                    Iltimos, birozdan keyin qayta urinib ko‘ring.
                </p>

                <p class="text-sm text-slate-500">
                    Taxminan 10–30 daqiqa
                </p>
            </div>

            <div class="flex flex-col sm:flex-row gap-4 justify-center pt-6">
                <a href="{{ route('debt.index') }}"
                   class="inline-flex items-center gap-2 px-6 py-3
                          bg-indigo-600 hover:bg-indigo-700 text-white font-medium
                          rounded-xl shadow-lg shadow-indigo-200/50 transition-all active:scale-95">
                    <i class="fa-solid fa-rotate-right"></i>
                    Yangilash
                </a>

                <a href="mailto:support@paynote.uz"
                   class="inline-flex items-center gap-2 px-6 py-3
                          border border-slate-300 hover:bg-slate-50 text-slate-700 font-medium
                          rounded-xl transition-all active:scale-95">
                    <i class="fa-solid fa-envelope"></i>
                    Bog‘lanish
                </a>
            </div>

            <div class="pt-8 text-sm text-slate-400">
                © {{ date('Y') }} PayNote.
            </div>
        </div>
    </div>
@endsection
