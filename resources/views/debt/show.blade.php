@extends('layouts.app')

@section('title')
    Foydalanuvchi
@endsection

@section('header')
    <header class="sticky top-0 z-50 backdrop-blur-md bg-white/80 border-b border-gray-200/60 shadow-sm">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <a href="{{ route('debt.index') }}"
                   class="flex items-center gap-2 text-slate-500 hover:text-indigo-600 transition-colors group">
                    <div
                        class="w-8 h-8 rounded-full bg-slate-100 group-hover:bg-indigo-50 flex items-center justify-center transition-colors">
                        <i class="fa-solid fa-arrow-left text-sm"></i>
                    </div>
                </a>
                <h1 class="text-lg font-bold text-slate-900">Batafsil ma'lumot</h1>
                <div class="flex gap-2">
                    <a href="tel:{{ $debt->phone }}"
                       class="w-9 h-9 rounded-full bg-slate-50 hover:bg-slate-100 text-slate-400 hover:text-indigo-600 transition-colors flex items-center justify-center">
                        <i class="fa-solid fa-phone"></i>
                    </a>
                    @can('update', $debt)
                        <a href="{{ route('debt.edit', $debt) }}"
                           class="w-9 h-9 rounded-full bg-slate-50 hover:bg-slate-100 text-slate-400 hover:text-indigo-600 transition-colors flex items-center justify-center">
                            <i class="fa-solid fa-pen text-sm"></i>
                        </a>
                    @endcan
                    @can('delete', $debt)
                        <a href="{{ route('debt.delete', $debt) }}"
                           class="w-9 h-9 rounded-full bg-slate-50 hover:bg-rose-50 text-slate-400 hover:text-rose-600 transition-colors flex items-center justify-center">
                            <i class="fa-solid fa-trash-can text-sm"></i>
                        </a>
                    @endcan
                </div>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

        <!-- Profile Card -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 mb-6 relative overflow-hidden">
            <div class="absolute top-0 right-0 w-32 h-32 bg-indigo-50 rounded-bl-full -mr-10 -mt-10 opacity-50"></div>

            <div class="flex flex-col sm:flex-row items-center gap-5 relative z-10 text-center sm:text-left">
                <div
                    class="w-20 h-20 rounded-full bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center text-white text-2xl font-bold border-4 border-white shadow-lg mx-auto sm:mx-0">
                    {{ Str::upper(Str::substr($debt->name, 0, 1)) }}
                </div>
                <div class="flex-1">
                    <h1 class="text-2xl font-bold text-slate-900 tracking-tight">{{ $debt->name }}</h1>
                    <p class="text-slate-500 flex items-center justify-center sm:justify-start gap-2 mt-1">
                        <i class="fa-solid fa-phone text-xs opacity-70"></i> {{ $debt->phone }}
                    </p>
                </div>
                <div class="mt-4 sm:mt-0">
                    @if($debt->status === 'unpaid')
                        <span
                            class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-sm font-medium bg-rose-50 text-rose-600 border border-rose-100">
                            <span class="w-1.5 h-1.5 rounded-full bg-rose-500 animate-pulse"></span>
                            To'lanmagan
                        </span>

                    @elseif($debt->status === 'partial')
                        <span
                            class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-sm font-medium bg-amber-50 text-amber-600 border border-amber-100">
                            <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
                            Qisman to'langan
                        </span>

                    @else
                        <span
                            class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-sm font-medium bg-emerald-50 text-emerald-600 border border-emerald-100">
                            <i class="fa-solid fa-check-circle text-xs"></i>
                            To'langan
                        </span>
                    @endif
                </div>
            </div>
        </div>

        <!-- Details Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">

            <!-- Financial Info -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <h3
                    class="text-sm font-semibold text-slate-400 uppercase tracking-wider mb-4 border-b border-gray-50 pb-2">
                    Moliyaviy holat</h3>

                <div class="space-y-4">
                    <div class="flex justify-between items-center">
                        <span class="text-slate-600 font-medium">Jami qarz miqdori</span>
                        <span class="text-lg font-bold text-slate-900">{{ number_format($debt->amount, 0, '.', ',') }} so'm</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-slate-600 font-medium">To'langan summa</span>
                        <span class="text-emerald-600 font-bold">+ {{ number_format($debt->paid_amount, 0, '.', ',') }} so'm</span>
                    </div>
                    <div class="h-px bg-gray-100 my-2"></div>
                    <div class="flex justify-between items-center">
                        <span class="text-slate-800 font-bold">Qolgan qarz</span>
                        <span class="text-xl font-extrabold text-rose-600">{{ number_format($debt->amount - $debt->paid_amount, 0, '.', ',') }} so'm</span>
                    </div>
                </div>
            </div>

            <!-- Additional Info -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                <h3
                    class="text-sm font-semibold text-slate-400 uppercase tracking-wider mb-4 border-b border-gray-50 pb-2">
                    Qo'shimcha ma'lumotlar</h3>

                <div class="space-y-4">
                    <div>
                        <span class="block text-xs text-slate-400 font-medium mb-1">Izoh</span>
                        <p
                            class="text-slate-700 bg-slate-50 p-3 rounded-lg text-sm leading-relaxed border border-slate-100">
                            @if($debt->note)
                                {{ $debt->note }}
                            @else
                                Izoh qo'shilmadi.
                            @endif
                        </p>
                    </div>

                    <div class="grid grid-cols-2 gap-4 mt-2">
                        <div>
                            <span class="block text-xs text-slate-400 font-medium mb-1">Yaratilgan sana</span>
                            <div class="flex items-center gap-2 text-slate-700 font-medium text-sm">
                                <i class="fa-regular fa-calendar text-slate-400"></i> {{ $debt->created_at->format('d M, Y') }}
                            </div>
                        </div>
                        <div>
                            <span class="block text-xs text-slate-400 font-medium mb-1">Yangilangan sana</span>
                            <div class="flex items-center gap-2 text-slate-700 font-medium text-sm">
                                <i class="fa-regular fa-clock text-slate-400"></i> {{ $debt->updated_at->format('d M, Y') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Actions -->
        @can('update', $debt)
            <div class="grid grid-cols-2 gap-4">
                <button onclick="showModal('modal-add-debt')"
                        class="flex items-center justify-center gap-2 py-3 px-4 bg-white border border-rose-200 text-rose-600 rounded-xl hover:bg-rose-50 transition-colors font-medium shadow-sm active:scale-95">
                    <i class="fa-solid fa-minus"></i> Qarz qo'shish
                </button>
                <button onclick="showModal('modal-payment')"
                        class="flex items-center justify-center gap-2 py-3 px-4 bg-indigo-600 text-white rounded-xl hover:bg-indigo-700 transition-colors font-medium shadow-md shadow-indigo-200 active:scale-95">
                    <i class="fa-solid fa-plus"></i> To'lov qilish
                </button>
            </div>
        @endcan

    </main>

    <!-- Modal Backdrop -->
    <div id="modal-backdrop" onclick="hideAllModals()"
         class="fixed inset-0 bg-slate-900/40 backdrop-blur-sm z-[60] hidden transition-opacity duration-300 opacity-0">
    </div>

    <!-- Modal: Add Debt -->
    <div id="modal-add-debt"
         class="fixed left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-[90%] max-w-md bg-white rounded-2xl shadow-2xl z-[70] hidden transition-all duration-300 scale-95 opacity-0">
        <div class="p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-xl font-bold text-slate-900">Qarz miqdorini qo'shish</h3>
                <button onclick="hideModal('modal-add-debt')" class="text-slate-400 hover:text-slate-600">
                    <i class="fa-solid fa-xmark text-xl"></i>
                </button>
            </div>
            <form class="space-y-4" method="post" action="{{ route('debt.increase', $debt) }}">
                @method('PUT')
                @csrf
                <div>
                    <x-form.input name="amount" type="number" placeholder="0"
                                  class="block w-full pl-10 pr-3 py-2.5 border border-slate-200 rounded-xl focus:ring-2 focus:ring-rose-500 focus:border-rose-500 text-sm transition-all shadow-sm"
                                  icon="fa-solid fa-money-bill-transfer" label="Yangi qarz miqdori"/>
                </div>
                <div>
                    <x-form.textarea name="note" rows="2" placeholder="Nima uchun qarz qo'shilyapti?"
                                     class="block w-full px-4 py-2.5 border border-slate-200 rounded-xl focus:ring-2 focus:ring-rose-500 focus:border-rose-500 text-sm transition-all shadow-sm resize-none"
                                     label="Izoh (ixtiyoriy)"/>
                </div>
                <div class="pt-2 flex gap-3">
                    <button type="button" onclick="hideModal('modal-add-debt')"
                            class="flex-1 py-2.5 rounded-xl border border-slate-200 text-slate-600 font-medium hover:bg-slate-50 transition-colors">
                        Bekor qilish
                    </button>
                    <button type="submit"
                            class="flex-1 py-2.5 rounded-xl bg-rose-600 text-white font-medium hover:bg-rose-700 shadow-md shadow-rose-100 transition-all active:scale-95">
                        Tasdiqlash
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal: Payment -->
    <div id="modal-payment"
         class="fixed left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-[90%] max-w-md bg-white rounded-2xl shadow-2xl z-[70] hidden transition-all duration-300 scale-95 opacity-0">
        <div class="p-6">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-xl font-bold text-slate-900">To'lovni qabul qilish</h3>
                <button onclick="hideModal('modal-payment')" class="text-slate-400 hover:text-slate-600">
                    <i class="fa-solid fa-xmark text-xl"></i>
                </button>
            </div>
            <form class="space-y-4" method="post" action="{{ route('debt.pay', $debt) }}">
                @method('PUT')
                @csrf
                <div>
                    <x-form.input name="paid_amount" type="number" placeholder="2,500,000"
                                  class="block w-full pl-10 pr-3 py-2.5 border border-slate-200 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 text-sm transition-all shadow-sm"
                                  icon="fa-solid fa-circle-check" label="To'lov miqdori"/>
                </div>
                <div class="pt-2 flex gap-3">
                    <button type="button" onclick="hideModal('modal-payment')"
                            class="flex-1 py-2.5 rounded-xl border border-slate-200 text-slate-600 font-medium hover:bg-slate-50 transition-colors">
                        Bekor qilish
                    </button>
                    <button type="submit"
                            class="flex-1 py-2.5 rounded-xl bg-indigo-600 text-white font-medium hover:bg-indigo-700 shadow-md shadow-indigo-100 transition-all active:scale-95">
                        To'lovni saqlash
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal: Confirm Delete -->
    <div id="modal-delete-confirm"
         class="fixed left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-[90%] max-w-sm bg-white rounded-2xl shadow-2xl z-[70] hidden transition-all duration-300 scale-95 opacity-0">
        <div class="p-6 text-center">
            <div class="inline-flex items-center justify-center w-16 h-16 bg-rose-50 text-rose-600 rounded-full mb-4">
                <i class="fa-solid fa-trash-can text-2xl"></i>
            </div>
            <h3 class="text-xl font-bold text-slate-900 mb-2">O'chirishni tasdiqlaysizmi?</h3>
            <p class="text-sm text-slate-500 mb-6 px-2">
                Ushbu qarzdor haqidagi barcha ma'lumotlar butunlay o'chib ketadi. Bu amalni ortga qaytarib bo'lmaydi.
            </p>
            <div class="flex gap-3">
                <button type="button" onclick="hideModal('modal-delete-confirm')"
                        class="flex-1 py-2.5 rounded-xl border border-slate-200 text-slate-600 font-medium hover:bg-slate-50 transition-colors">
                    Bekor qilish
                </button>
                <button type="button" onclick="location.href='index.html'"
                        class="flex-1 py-2.5 rounded-xl bg-rose-600 text-white font-medium hover:bg-rose-700 shadow-md shadow-rose-100 transition-all active:scale-95">
                    Ha, o'chirilsin
                </button>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function showModal(id) {
            const backdrop = document.getElementById('modal-backdrop');
            const modal = document.getElementById(id);

            backdrop.classList.remove('hidden');
            modal.classList.remove('hidden');

            setTimeout(() => {
                backdrop.classList.remove('opacity-0');
                modal.classList.remove('opacity-0', 'scale-95');
            }, 10);

            document.body.style.overflow = 'hidden';
        }

        function hideModal(id) {
            const backdrop = document.getElementById('modal-backdrop');
            const modal = document.getElementById(id);

            backdrop.classList.add('opacity-0');
            modal.classList.add('opacity-0', 'scale-95');

            setTimeout(() => {
                backdrop.classList.add('hidden');
                modal.classList.add('hidden');

                if (document.querySelectorAll('[id^="modal-"]:not(.hidden)').length === 1) {
                    document.body.style.overflow = '';
                }
            }, 300);
        }

        function hideAllModals() {
            document.querySelectorAll('[id^="modal-"]:not(#modal-backdrop)').forEach(modal => {
                if (!modal.classList.contains('hidden')) {
                    hideModal(modal.id);
                }
            });
        }

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') hideAllModals();
        });
    </script>
@endsection
