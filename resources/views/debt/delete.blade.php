@extends('layouts.app')

@section('title')
    O'chirishni tasdiqlash
@endsection


@section('body-class')
    bg-gray-100 text-slate-800 font-sans antialiased min-h-screen flex items-center justify-center p-4
@endsection

@section('content')
    <div class="bg-white rounded-2xl shadow-xl w-full max-w-sm overflow-hidden relative">
        <div class="absolute top-0 left-0 right-0 h-1.5 bg-rose-500"></div>

        <div class="p-6 text-center">
            <div
                class="w-16 h-16 bg-rose-50 rounded-full flex items-center justify-center mx-auto mb-4 animate-bounce-slow">
                <i class="fa-solid fa-triangle-exclamation text-2xl text-rose-500"></i>
            </div>

            <h2 class="text-xl font-bold text-slate-900 mb-2">Haqiqatan ham o'chirmoqchimisiz?</h2>
            <p class="text-slate-500 text-sm mb-6 leading-relaxed">
                <span class="font-semibold text-slate-700">{{ $debt->name }}</span> ga tegishli barcha ma'lumotlar va
                qarz tarixi o'chiriladi. Bu amalni ortga qaytarib bo'lmaydi.
            </p>

            <div class="flex flex-col gap-3">
                <form method="POST" action="{{ route('debt.destroy', $debt) }}">
                    @method('DELETE')
                    @csrf
                    <button
                        class="w-full py-2.5 bg-rose-600 hover:bg-rose-700 text-white rounded-xl font-medium shadow-md shadow-rose-200 transition-all active:scale-95">
                        Ha, o'chirilsin
                    </button>
                </form>

                <a href="{{ route('debt.show', $debt) }}"
                   class="w-full py-2.5 bg-white border border-gray-200 text-slate-600 hover:bg-gray-50 rounded-xl font-medium transition-colors">
                    Bekor qilish
                </a>
            </div>
        </div>
    </div>
@endsection

