@extends('layouts.app')

@section('header')
    <header class="sticky top-0 z-50 backdrop-blur-md bg-white/80 border-b border-gray-200/60 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo / Title -->
                <a href="{{ route('debt.index') }}" class="flex items-center gap-3">
                    <div class="bg-indigo-600 text-white p-2 rounded-lg shadow-indigo-200 shadow-md">
                        <i class="fa-solid fa-wallet text-lg"></i>
                    </div>
                    <h1 class="text-xl font-bold text-slate-900 tracking-tight">PayNote</h1>
                </a>

                <!-- Search Bar (Desktop) -->
                <div class="hidden sm:flex flex-1 max-w-md mx-8">
                    <form method="GET" action="{{ route('debt.index') }}" class="flex flex-1">
                        <div class="relative w-full flex items-center group">
                            <div
                                class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">
                                <i class="fa-solid fa-magnifying-glass text-sm"></i>
                            </div>

                            <input
                                name="search"
                                value="{{ request('search') }}"
                                type="text"
                                placeholder="Qidirish (ism, telefon...)"
                                class="block w-full pl-10 pr-3 py-2.5 bg-slate-100 rounded-l-xl focus:bg-white focus:ring-2 focus:ring-indigo-500 text-sm outline-none"
                            >

                            <button type="submit"
                                    class="shrink-0 bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2.5 rounded-r-xl text-sm font-semibold">
                                Qidirish
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Actions -->
                <div class="flex items-center gap-3">
                    <button
                        onclick="toggleMobileSearch()"
                        class="sm:hidden p-2 text-slate-500 hover:text-indigo-600 hover:bg-indigo-50 rounded-full transition-colors">
                        <i class="fa-solid fa-magnifying-glass text-lg"></i>
                    </button>
                    <a href="{{ route('debt.create') }}"
                       class="hidden sm:flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg shadow-md shadow-indigo-200 transition-all active:scale-95 text-sm font-medium">
                        <i class="fa-solid fa-plus"></i> Yangi qo'shish
                    </a>
                    <!-- Mobile Add Button -->
                    <a href="{{ route('debt.create') }}"
                       class="sm:hidden flex items-center justify-center bg-indigo-600 text-white w-9 h-9 rounded-full shadow-md active:scale-95">
                        <i class="fa-solid fa-plus"></i>
                    </a>

                    <!-- Profile / Logout -->
                    <div class="relative ml-2">
                        <button onclick="toggleProfileDropdown()"
                                class="w-10 h-10 rounded-full border-2 border-indigo-100 p-0.5 active:scale-95 transition-transform flex items-center justify-center overflow-hidden">
                            <div
                                class="w-full h-full rounded-full bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center text-white text-sm font-bold shadow-sm">
                                {{ Str::upper(Str::substr(auth()->user()->name, 0, 1)) }}
                            </div>
                        </button>
                        <div id="profile-dropdown"
                             class="hidden absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-xl border border-slate-100 z-50 overflow-hidden">
                            <div class="px-4 py-3 border-b border-slate-50">
                                <p class="text-sm font-bold text-slate-900 leading-none">{{ auth()->user()->name }}</p>
                                <p class="text-xs text-slate-500 mt-1">{{ auth()->user()->email }}</p>
                            </div>
                            <a href="{{ route('logout') }}"
                               class="flex items-center px-4 py-2.5 text-sm text-slate-600 hover:bg-slate-50 hover:text-rose-600 transition-colors">
                                <i class="fa-solid fa-arrow-right-from-bracket mr-2.5 opacity-70"></i>Chiqish
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Search Bar (Mobile dropdown) -->
        <div id="mobile-search" class="sm:hidden hidden px-4 pb-4">
            <form method="GET" action="{{ route('debt.index') }}">
                <div class="relative w-full flex items-center">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">
                        <i class="fa-solid fa-magnifying-glass text-sm"></i>
                    </div>

                    <input
                        name="search"
                        value="{{ request('search') }}"
                        type="text"
                        placeholder="Qidirish (ism, telefon...)"
                        class="block w-full pl-10 pr-3 py-2.5 bg-slate-100 rounded-l-xl focus:bg-white focus:ring-2 focus:ring-indigo-500 text-sm outline-none"
                    >

                    <button type="submit"
                            class="shrink-0 bg-indigo-600 text-white px-4 py-2.5 rounded-r-xl text-sm font-semibold">
                        Qidirish
                    </button>
                </div>
            </form>
        </div>
    </header>
@endsection

@section('content')
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

        <!-- Table Header (Hidden on Mobile) -->
        <div
            class="hidden lg:grid grid-cols-12 gap-4 px-6 py-3 text-xs font-semibold text-slate-500 uppercase tracking-wider">
            <div class="col-span-3">Mijoz</div>
            <div class="col-span-3">Izoh</div>
            <div class="col-span-2 text-right">Qarz miqdori</div>
            <div class="col-span-2 text-right">Holat</div>
            <div class="col-span-2 text-right">Sana</div>
        </div>

        <!-- List Container -->
        <div id="debtors-list" class="space-y-4">

            @forelse($debts as $debt)
                @php
                    $status = $debt->status;

                    $cardClass = match ($status) {
                      'paid' => "group bg-slate-50/50 rounded-xl p-5 lg:px-6 lg:py-4 border border-gray-100 shadow-sm card-hover opacity-80 hover:opacity-100 relative hover:z-30",
                      default => "group bg-white rounded-xl p-5 lg:px-6 lg:py-4 border border-gray-200/60 shadow-sm card-hover relative hover:z-30",
                    };

                    $accentClass = match ($status) {
                      'unpaid' => "bg-rose-500",
                      'partial' => "bg-amber-400",
                      'paid' => "bg-emerald-500",
                    };
                @endphp

                <div class="{{ $cardClass }}">

                    <div class="absolute left-0 top-0 bottom-0 w-1 {{ $accentClass }} rounded-l-xl"></div>

                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-4 items-center">

                        <!-- Profile -->
                        <div class="lg:col-span-3 flex items-center gap-4">
                            <div
                                class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-500 text-sm font-bold border border-slate-200">
                                {{ Str::upper(Str::substr($debt->name, 0, 1)) }}
                            </div>
                            <div>
                                <h3 class="font-bold text-base leading-tight {{ $status === 'paid' ? 'text-slate-700' : 'text-slate-900' }}">{{ $debt->name }}</h3>
                                <a href="tel:{{ $debt->phone }}"
                                   class="text-slate-500 text-sm hover:text-indigo-600 transition-colors flex items-center gap-1.5 mt-0.5">
                                    <i class="fa-solid fa-phone text-xs opacity-70"></i> {{ $debt->phone }}
                                </a>
                            </div>
                        </div>

                        <!-- Note -->
                        <div class="lg:col-span-3">
                            <div class="lg:hidden text-xs text-slate-400 font-medium mb-1 uppercase">Izoh</div>
                            <p class="text-sm leading-relaxed truncate {{ $status === 'paid' ? 'text-slate-500 line-through decoration-slate-300' : 'text-slate-600' }}">
                                @if($debt->note)
                                    {{ $debt->note }}
                                @else
                                    Izoh qo'shilmadi.
                                @endif
                            </p>
                        </div>

                        <!-- Amount -->
                        <div class="lg:col-span-2 text-left lg:text-right">
                            <div class="lg:hidden text-xs text-slate-400 font-medium mb-1 uppercase">Qarz miqdori</div>
                            <div class="flex flex-col items-start lg:items-end">
                                <span class="{{ $status === 'paid'
                                    ? 'text-slate-500 font-medium text-base line-through decoration-slate-400 decoration-2'
                                    : 'text-slate-900 font-bold text-base' }}">{{ number_format($debt->amount, 0, '.', ',') }} so'm</span>

                                @if($status !== 'paid')
                                    <span
                                        class="text-xs text-emerald-600 font-medium bg-emerald-50 px-1.5 py-0.5 rounded mt-0.5">
                                    <i class="fa-solid fa-check mr-1"></i>{{ number_format($debt->paid_amount, 0, '.', ',') }} so'm to'landi
                                    </span>
                                @else
                                    <span class="text-xs text-emerald-600 font-bold mt-0.5">
                                        To'liq yopildi
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Status -->
                        <div class="lg:col-span-2 text-left lg:text-right flex lg:justify-end">
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

                        <!-- Column 5: Date + Actions -->
                        <div
                            class="lg:col-span-2 text-left lg:text-right flex items-center justify-between lg:justify-end gap-4">
                            <div class="text-xs text-slate-400 font-medium">
                                <i class="fa-regular fa-calendar mr-1 lg:hidden"></i>{{ $debt->created_at->format('d M, Y') }}
                            </div>
                            <div class="relative">
                                <button onclick="toggleDropdown(this)"
                                        class="w-8 h-8 rounded-full bg-slate-50 hover:bg-slate-100 text-slate-400 hover:text-slate-600 flex items-center justify-center transition-colors focus:outline-none">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </button>

                                <!-- Dropdown Menu -->
                                <div
                                    class="dropdown-menu hidden absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-xl border border-gray-100 z-50 transform origin-top-right transition-all">
                                    <a href="{{ route('debt.show', $debt) }}"
                                       class="flex items-center px-4 py-2.5 text-sm text-slate-600 hover:bg-slate-50 hover:text-indigo-600 transition-colors">
                                        <i class="fa-regular fa-eye mr-2.5"></i>Batafsil
                                    </a>
                                    <a href="{{ route('debt.edit', $debt) }}"
                                       class="flex items-center px-4 py-2.5 text-sm text-slate-600 hover:bg-slate-50 hover:text-indigo-600 transition-colors border-t border-gray-50">
                                        <i class="fa-regular fa-pen-to-square mr-2.5"></i>Tahrirlash
                                    </a>
                                    <a href="{{ route('debt.delete', $debt) }}"
                                       class="flex items-center px-4 py-2.5 text-sm text-rose-500 hover:bg-rose-50 transition-colors border-t border-gray-50">
                                        <i class="fa-regular fa-trash-can mr-2.5"></i>O'chirish
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @empty
                <div id="empty-state" class="py-16 text-center animate-in fade-in slide-in-from-bottom-3 duration-500">
                    <div
                        class="inline-flex items-center justify-center w-20 h-20 rounded-[28px] bg-slate-100 text-slate-400 text-3xl mb-5 border border-slate-200/50">
                        <i class="fa-solid fa-folder-open"></i>
                    </div>
                    <h2 class="text-xl font-bold text-slate-900 tracking-tight">Qarzdorlar mavjud emas</h2>
                    <p class="text-slate-500 mt-2 max-w-xs mx-auto text-sm leading-relaxed">
                        Hozircha sizning ro'yxatingiz bo'sh. Yangi qarzdor qo'shish uchun quyidagi tugmani bosing.
                    </p>
                    <div class="mt-8">
                        <a href="{{ route('debt.create') }}"
                           class="inline-flex items-center gap-2 bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2.5 rounded-lg shadow-md shadow-indigo-100 transition-all active:scale-95 text-sm font-bold">
                            <i class="fa-solid fa-plus text-xs"></i> Yangi qo'shish
                        </a>
                    </div>
                </div>
            @endforelse

        </div>

        <!-- Pagination (Bottom) -->
        <x-pagination :paginator="$debts"/>
    </main>
@endsection

@section('script')
    <script>
        function toggleDropdown(button) {
            const dropdown = button.nextElementSibling;
            const isHidden = dropdown.classList.contains('hidden');

            document.querySelectorAll('.dropdown-menu').forEach(menu => {
                menu.classList.add('hidden');
            });

            if (isHidden) {
                dropdown.classList.remove('hidden');
            }
        }

        function toggleProfileDropdown() {
            const dropdown = document.getElementById('profile-dropdown');
            dropdown.classList.toggle('hidden');
        }

        document.addEventListener('click', (e) => {
            if (!e.target.closest('.relative')) {
                document.querySelectorAll('.dropdown-menu, #profile-dropdown').forEach(menu => {
                    menu.classList.add('hidden');
                });
            }
        });

        function toggleMobileSearch() {
            document.getElementById('mobile-search')?.classList.toggle('hidden');
        }
    </script>
@endsection
