@extends('layouts.app')

@section('title')
    Emailni tasdiqlash
@endsection

@section('body-class')
    bg-gray-50 text-slate-800 font-sans antialiased min-h-screen flex flex-col justify-center py-12 sm:px-6 lg:px-8
@endsection

@section('content')
    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div
            class="bg-white py-12 px-6 shadow-xl shadow-slate-200/50 border border-gray-100 sm:rounded-2xl sm:px-10 text-center">

            <div
                class="inline-flex items-center justify-center w-20 h-20 bg-indigo-50 text-indigo-600 rounded-full mb-6">
                <i class="fa-solid fa-paper-plane text-3xl"></i>
            </div>

            <h2 class="text-2xl font-bold text-slate-900 tracking-tight mb-2">Emailingizni tekshiring!</h2>
            <p class="text-sm text-slate-500 mb-8 px-4">
                Biz sizning <b>{{ auth()->user()->email }}</b> manzilingizga hisobni faollashtirish havolasini yubordik.
                Iltimos,
                xatni ochib amalni tasdiqlang.
            </p>

            <div class="space-y-4">
                <button type="button"
                        class="w-full flex justify-center py-2.5 px-4 border border-transparent rounded-lg shadow-md shadow-indigo-100 text-sm font-semibold text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none transition-all active:scale-[0.98]">
                    Emailni qayta yuborish
                </button>
            </div>

            <div class="mt-10 pt-10 border-t border-slate-100">
                <p class="text-xs text-slate-400 leading-relaxed italic">
                    Xat kelmadimi? Spam papkasini ham tekshirib ko'ring yoki biroz kuting.
                </p>
            </div>
        </div>
    </div>
@endsection
