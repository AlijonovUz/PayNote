@extends('layouts.app')

@section('title', '404 - Sahifa topilmadi')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-white px-4">
        <div class="w-full max-w-md text-center space-y-8 py-10">

            <!-- Raqam + oddiy ikon -->
            <div class="relative">
                <div class="text-[7rem] sm:text-[9rem] font-black text-slate-100 select-none leading-none">
                    404
                </div>
                <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                    <svg class="w-20 h-20 sm:w-24 sm:h-24 text-indigo-500 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        <line x1="8" y1="16" x2="16" y2="8" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </div>
            </div>

            <div class="space-y-3">
                <h1 class="text-3xl sm:text-4xl font-bold text-slate-800">
                    Sahifa topilmadi
                </h1>
                <p class="text-slate-600 text-base sm:text-lg">
                    Manzil noto‘g‘ri kiritilgan bo‘lishi mumkin yoki sahifa o‘chirilgan.
                </p>
            </div>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-8">
                <a href="javascript:history.back()"
                   class="inline-flex items-center gap-3 px-8 py-4
                      bg-white border-2 border-slate-200 hover:border-slate-300
                      text-slate-700 font-semibold text-lg rounded-2xl
                      shadow-sm hover:shadow transition-all duration-300 active:scale-[0.98]">
                    <i class="fa-solid fa-arrow-left"></i>
                    Orqaga qaytish
                </a>
            </div>
        </div>
    </div>
@endsection
