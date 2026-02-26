@extends('layouts.app')

@section('title', '500 - Server xatosi')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-white px-4">
        <div class="w-full max-w-md text-center space-y-8 py-10">

            <!-- Raqam + ikon -->
            <div class="relative">
                <div class="text-[7rem] sm:text-[9rem] font-black text-amber-50/90 select-none leading-none">
                    500
                </div>
                <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                    <div class="w-20 h-20 sm:w-24 sm:h-24 rounded-full bg-amber-50/60 flex items-center justify-center shadow-md">
                        <svg class="w-12 h-12 sm:w-14 sm:h-14 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            <circle cx="12" cy="19" r="1" fill="currentColor" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="space-y-4">
                <h1 class="text-3xl sm:text-4xl font-bold text-slate-800">
                    Serverda xatolik
                </h1>
                <p class="text-base sm:text-lg text-slate-600">
                    Kutilmagan muammo yuz berdi.<br>Jamoamiz tez orada hal qiladi.
                </p>
                <p class="text-sm text-slate-500">
                    Iltimos, birozdan keyin qayta urinib ko‘ring
                </p>
            </div>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-6">
                <a href="{{ route('debt.index') ?? '/' }}"
                   class="inline-flex items-center justify-center gap-2.5 px-7 py-3
                      bg-amber-600 hover:bg-amber-700
                      text-white font-medium rounded-xl
                      shadow-md hover:shadow-lg transition-all duration-200 active:scale-[0.97] min-w-[160px]">
                    <i class="fa-solid fa-rotate-right text-base"></i>
                    Yangilash
                </a>

                <button onclick="history.back()"
                        class="inline-flex items-center justify-center gap-2.5 px-7 py-3
                           bg-white border border-slate-300 hover:border-slate-400
                           text-slate-700 font-medium rounded-xl
                           shadow-sm hover:shadow transition-all duration-200 active:scale-[0.97] min-w-[160px]">
                    <i class="fa-solid fa-arrow-left text-base"></i>
                    Orqaga
                </button>
            </div>

            <div class="pt-6 text-sm text-slate-400 flex items-center justify-center gap-2">
                <i class="fa-solid fa-shield-halved text-amber-500/70"></i>
                Xatolik avtomatik qayd etildi
            </div>

        </div>
    </div>
@endsection
