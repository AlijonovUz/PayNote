@extends('layouts.app')

@section('title', '403 - Ruxsat yo‘q')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-b from-slate-50 to-white px-4">
        <div class="w-full max-w-md text-center space-y-10 py-12">

            <!-- Ikonka + raqam kombinatsiyasi -->
            <div class="relative inline-flex items-center justify-center">
                <div class="text-[10rem] sm:text-[12rem] font-black text-rose-50/70 select-none tracking-tighter leading-none">
                    403
                </div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="w-28 h-28 sm:w-36 sm:h-36 rounded-full bg-rose-100/40 backdrop-blur-sm flex items-center justify-center shadow-xl">
                        <i class="fa-solid fa-lock text-5xl sm:text-6xl text-rose-500"></i>
                    </div>
                </div>
            </div>

            <!-- Matn qismi -->
            <div class="space-y-5">
                <h1 class="text-4xl sm:text-5xl font-extrabold text-slate-800 tracking-tight">
                    Ruxsat yo‘q
                </h1>

                <p class="text-lg sm:text-xl text-slate-600 leading-relaxed">
                    Afsuski, sizda bu sahifani ko‘rish yoki ushbu amalni bajarish uchun yetarli huquq yo‘q.
                </p>
            </div>

            <!-- Tugmalar -->
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
