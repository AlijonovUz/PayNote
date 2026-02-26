@extends('layouts.app')

@section('title')
    Qarzdorni tahrirlash
@endsection


@section('header')
    <header class="sticky top-0 z-50 backdrop-blur-md bg-white/80 border-b border-gray-200/60 shadow-sm">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <a href="{{ route('debt.index') }}"
                   class="flex items-center gap-2 text-slate-500 hover:text-indigo-600 transition-colors group">
                    <div
                        class="w-8 h-8 rounded-full bg-slate-100 group-hover:bg-indigo-50 flex items-center justify-center transition-colors">
                        <i class="fa-solid fa-arrow-left text-sm"></i>
                    </div>
                    <span class="font-medium">Orqaga</span>
                </a>
                <h1 class="text-lg font-bold text-slate-900">Qarzdorni tahrirlash</h1>
                <div class="w-20"></div> <!-- Spacer for balance -->
            </div>
        </div>
    </header>
@endsection

@section('content')
    <main class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="p-6 sm:p-8">
                <form action="{{ route('debt.update', $debt) }}" method="POST" class="space-y-6">
                    @method('PUT')
                    @csrf

                    <!-- Ism Familiya -->
                    <div>
                        <x-form.input type="text" name="name" placeholder="Masalan: Teshaboyev Boltaboy"
                                      icon="fa-regular fa-user" label="To'liq ism (F.I.O)" :value="$debt->name"/>
                    </div>

                    <!-- Telefon -->
                    <div>
                        <x-form.input type="tel" name="phone" placeholder="+998 90 123 45 67" icon="fa-solid fa-phone"
                                      label="Telefon raqam" :value="$debt->phone"/>
                    </div>

                    <!-- Izoh -->
                    <div>
                        <x-form.textarea name="note" placeholder="Nima uchun qarz olinyapti?" label="Izoh (ixtiyoriy)"
                                         :value="$debt->note"/>
                    </div>

                    <!-- Actions -->
                    <div class="pt-4 flex items-center justify-end gap-3 border-t border-gray-50 mt-8">
                        <a href="{{ route('debt.show', $debt) }}"
                           class="px-5 py-2.5 rounded-lg text-slate-600 hover:text-slate-800 hover:bg-slate-50 font-medium text-sm transition-colors">
                            Bekor qilish
                        </a>
                        <button type="submit"
                                class="px-5 py-2.5 rounded-lg bg-indigo-600 hover:bg-indigo-700 text-white font-medium text-sm shadow-md shadow-indigo-200 transition-all active:scale-95 flex items-center gap-2">
                            <i class="fa-solid fa-check"></i> Saqlash
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
