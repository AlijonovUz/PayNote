@extends('layouts.app')

@section('title')
    Aqlli qarz boshqaruvi
@endsection

@section('body-class')
    bg-slate-50 text-slate-900 font-sans antialiased overflow-x-hidden
@endsection

@section('navigation')
    <nav class="fixed top-0 w-full z-50 glass-effect border-b border-slate-200/50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center gap-3">
                    <div class="bg-indigo-600 text-white p-2.5 rounded-xl shadow-indigo-200 shadow-lg">
                        <i class="fa-solid fa-wallet text-xl"></i>
                    </div>
                    <span class="text-xl font-extrabold tracking-tight text-slate-900">PayNote</span>
                </div>
                <div class="hidden md:flex items-center gap-8">
                    <a href="#features"
                       class="text-sm font-medium text-slate-600 hover:text-indigo-600 transition-colors">Xususiyatlar</a>
                    <a href="#about"
                       class="text-sm font-medium text-slate-600 hover:text-indigo-600 transition-colors">Biz
                        haqimizda</a>
                    <div class="h-6 w-px bg-slate-200"></div>
                    <a href="{{ route('login') }}"
                       class="text-sm font-medium text-slate-600 hover:text-indigo-600 transition-colors">Kirish</a>
                    <a href="{{ route('register') }}"
                       class="bg-indigo-600 text-white px-6 py-2.5 rounded-xl text-sm font-bold shadow-lg shadow-indigo-100 hover:bg-indigo-700 transition-all active:scale-95">Bepul
                        boshlash</a>
                </div>
                <!-- Mobile Menu Button -->
                <button class="md:hidden text-slate-600">
                    <i class="fa-solid fa-bars-staggered text-2xl"></i>
                </button>
            </div>
        </div>
    </nav>
@endsection

@section('header')
    <section class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden">
        <!-- Abstract Background Shapes -->
        <div
            class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-7xl h-full -z-10 opacity-30 pointer-events-none">
            <div class="absolute top-20 left-10 w-96 h-96 bg-indigo-200 rounded-full blur-[100px]"></div>
            <div class="absolute bottom-10 right-10 w-80 h-80 bg-purple-200 rounded-full blur-[100px]"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div
                class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-indigo-50 border border-indigo-100 text-indigo-600 text-xs font-bold mb-8 animate-bounce">
                <span class="relative flex h-2 w-2">
                    <span
                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-indigo-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-indigo-500"></span>
                </span>
                Yangi avlod qarz boshqaruvi
            </div>
            <h1 class="text-5xl lg:text-7xl font-extrabold text-slate-900 tracking-tight leading-[1.1] mb-8">
                Qarzlaringizni <br> <span class="gradient-text">Aqlli Boshqaring</span>
            </h1>
            <p class="max-w-2xl mx-auto text-lg text-slate-500 leading-relaxed mb-10">
                Endi qarzlar, to'lovlar va muddatlarni daftarda yozish shart emas. Hammasini bitta zamonaviy platformada
                nazorat qiling. Oson, xavfsiz va tezkor.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ route('register') }}"
                   class="w-full sm:w-auto bg-indigo-600 text-white px-8 py-4 rounded-2xl text-lg font-bold shadow-xl shadow-indigo-200 hover:bg-indigo-700 transition-all active:scale-95 flex items-center justify-center gap-2">
                    Hoziroq boshlash <i class="fa-solid fa-arrow-right text-sm"></i>
                </a>
                <a href="#features"
                   class="w-full sm:w-auto bg-white text-slate-700 border border-slate-200 px-8 py-4 rounded-2xl text-lg font-bold hover:bg-slate-50 transition-all flex items-center justify-center gap-2">
                    Batafsil ma'lumot
                </a>
            </div>

            <!-- Dashboard Preview -->
            <div class="mt-20 relative group">
                <div
                    class="absolute inset-0 bg-indigo-600/5 blur-[100px] scale-90 group-hover:scale-100 transition-transform duration-500">
                </div>
                <div
                    class="relative bg-white rounded-3xl shadow-2xl border border-slate-200 p-6 overflow-hidden mx-auto max-w-4xl animate-float min-h-[400px] flex flex-col">
                    <!-- Dashboard Mock Header -->
                    <div class="flex items-center justify-between mb-8 pb-4 border-b border-slate-100">
                        <div class="flex gap-2">
                            <div class="w-3 h-3 rounded-full bg-rose-400"></div>
                            <div class="w-3 h-3 rounded-full bg-amber-400"></div>
                            <div class="w-3 h-3 rounded-full bg-emerald-400"></div>
                        </div>
                        <div class="w-24 h-4 bg-slate-100 rounded-full"></div>
                    </div>
                    <!-- Dashboard Mock Content -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-8">
                        <div
                            class="h-32 bg-indigo-50 rounded-2xl border border-indigo-100 p-4 flex flex-col justify-end">
                            <div class="w-12 h-2 bg-indigo-200 rounded-full mb-2"></div>
                            <div class="w-20 h-4 bg-indigo-500 rounded-full"></div>
                        </div>
                        <div class="h-32 bg-slate-50 rounded-2xl border border-slate-100 p-4 flex flex-col justify-end">
                            <div class="w-12 h-2 bg-slate-200 rounded-full mb-2"></div>
                            <div class="w-20 h-4 bg-slate-700 rounded-full"></div>
                        </div>
                        <div class="h-32 bg-rose-50 rounded-2xl border border-rose-100 p-4 flex flex-col justify-end">
                            <div class="w-12 h-2 bg-rose-200 rounded-full mb-2"></div>
                            <div class="w-20 h-4 bg-rose-500 rounded-full"></div>
                        </div>
                    </div>
                    <!-- Dashboard Mock List -->
                    <div class="space-y-3">
                        <div
                            class="flex items-center justify-between p-4 bg-slate-50 rounded-xl border border-slate-100">
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 rounded-full bg-indigo-100"></div>
                                <div class="space-y-2">
                                    <div class="w-32 h-3 bg-slate-300 rounded-full"></div>
                                    <div class="w-20 h-2 bg-slate-200 rounded-full"></div>
                                </div>
                            </div>
                            <div class="w-16 h-4 bg-rose-100 rounded-full"></div>
                        </div>
                        <div
                            class="flex items-center justify-between p-4 bg-slate-50 rounded-xl border border-slate-100">
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 rounded-full bg-rose-100"></div>
                                <div class="space-y-2">
                                    <div class="w-32 h-3 bg-slate-300 rounded-full"></div>
                                    <div class="w-20 h-2 bg-slate-200 rounded-full"></div>
                                </div>
                            </div>
                            <div class="w-16 h-4 bg-rose-100 rounded-full"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <!-- Features Section -->
    <section id="features" class="py-24 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-20">
                <h2 class="text-3xl lg:text-4xl font-bold text-slate-900 mb-4 tracking-tight">Imkoniyatlarimiz</h2>
                <p class="text-slate-500 max-w-xl mx-auto">Sizning moliyaviy barqarorligingiz uchun barcha zarur
                    vositalar bir joyda jamlangan.</p>
                <div class="h-1.5 w-20 bg-indigo-600 mx-auto rounded-full mt-6"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <!-- Card 1 -->
                <div
                    class="p-8 rounded-3xl bg-slate-50 border border-slate-100 hover:border-indigo-200 hover:bg-white hover:shadow-xl transition-all duration-500 group">
                    <div
                        class="w-14 h-14 bg-indigo-50 rounded-2xl flex items-center justify-center text-indigo-600 text-2xl mb-6 group-hover:bg-indigo-600 group-hover:text-white transition-all duration-500">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Xavfsizlik</h3>
                    <p class="text-slate-500 leading-relaxed mb-4">Ma'lumotlaringiz zamonaviy shifrlash tizimi orqali
                        himoyalangan. Biz maxfiylikni birinchi o'ringa qo'yamiz.</p>
                    <ul class="space-y-2 text-sm text-slate-600 font-medium">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-emerald-500 text-xs"></i>
                            256-bit shifrlash
                        </li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-emerald-500 text-xs"></i>
                            Bulutli zaxira
                        </li>
                    </ul>
                </div>

                <!-- Card 2 -->
                <div
                    class="p-8 rounded-3xl bg-slate-50 border border-slate-100 hover:border-indigo-200 hover:bg-white hover:shadow-xl transition-all duration-500 group">
                    <div
                        class="w-14 h-14 bg-indigo-50 rounded-2xl flex items-center justify-center text-indigo-600 text-2xl mb-6 group-hover:bg-indigo-600 group-hover:text-white transition-all duration-500">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Statistika</h3>
                    <p class="text-slate-500 leading-relaxed mb-4">Jami qarzlaringiz va to'lovlar tarixingizni vizual
                        grafiklar orqali real vaqtda kuzatib boring.</p>
                    <ul class="space-y-2 text-sm text-slate-600 font-medium">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-emerald-500 text-xs"></i>
                            Oylik hisobotlar
                        </li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-emerald-500 text-xs"></i>
                            Oson tahlil
                        </li>
                    </ul>
                </div>

                <!-- Card 3 -->
                <div
                    class="p-8 rounded-3xl bg-slate-50 border border-slate-100 hover:border-indigo-200 hover:bg-white hover:shadow-xl transition-all duration-500 group">
                    <div
                        class="w-14 h-14 bg-indigo-50 rounded-2xl flex items-center justify-center text-indigo-600 text-2xl mb-6 group-hover:bg-indigo-600 group-hover:text-white transition-all duration-500">
                        <i class="fa-solid fa-bolt"></i>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Tezkorlik</h3>
                    <p class="text-slate-500 leading-relaxed mb-4">Bir necha soniya ichida qarz qo'shing yoki
                        to'lovlarni qayd qiling. Hech qanday murakkabliklarsiz.</p>
                    <ul class="space-y-2 text-sm text-slate-600 font-medium">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-emerald-500 text-xs"></i>
                            Qulay interfeys
                        </li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-emerald-500 text-xs"></i>
                            Har qanday qurilmada
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="py-24 bg-slate-50 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="flex-1 relative order-2 lg:order-1">
                    <div class="absolute -top-10 -left-10 w-40 h-40 bg-indigo-100 rounded-full blur-3xl opacity-60">
                    </div>
                    <div class="grid grid-cols-2 gap-4 relative z-10">
                        <div
                            class="aspect-square bg-white rounded-3xl shadow-lg border border-slate-100 flex items-center justify-center text-indigo-600 text-5xl">
                            <i class="fa-solid fa-users-gear"></i>
                        </div>
                        <div
                            class="aspect-square bg-indigo-600 rounded-3xl shadow-xl shadow-indigo-100 flex items-center justify-center text-white text-5xl mt-8">
                            <i class="fa-solid fa-hand-holding-dollar"></i>
                        </div>
                        <div
                            class="aspect-square bg-slate-900 rounded-3xl shadow-xl flex items-center justify-center text-white text-5xl -mt-8">
                            <i class="fa-solid fa-laptop-code"></i>
                        </div>
                        <div
                            class="aspect-square bg-white rounded-3xl shadow-lg border border-slate-100 flex items-center justify-center text-indigo-600 text-5xl">
                            <i class="fa-solid fa-rocket"></i>
                        </div>
                    </div>
                    <div
                        class="absolute -bottom-6 -right-6 bg-white p-6 rounded-2xl shadow-xl z-20 hidden sm:block border border-slate-100 translate-y-4">
                        <p class="text-3xl font-extrabold text-indigo-600 mb-1">5,000+</p>
                        <p class="text-sm font-bold text-slate-500">Mamnun mijozlar</p>
                    </div>
                </div>
                <div class="flex-1">
                    <h2 class="text-3xl lg:text-4xl font-bold text-slate-900 mb-6 tracking-tight">Biz haqimizda</h2>
                    <p class="text-lg text-slate-600 leading-relaxed mb-8">
                        PayNote — qarz munosabatlarini yanada shaffof va tartibli qilish maqsadida yaratilgan
                        loyiha. Bizning jamoamiz moliyaviy texnologiyalar sohasidagi tajribali mutaxassislardan iborat
                        bo'lib, har bir foydalanuvchi uchun maksimal qulaylikni ta'minlashga intiladi.
                    </p>
                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <div
                                class="w-12 h-12 bg-white rounded-xl shadow-sm flex items-center justify-center text-indigo-600 shrink-0">
                                <i class="fa-solid fa-lightbulb"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900">Bizning missiya</h4>
                                <p class="text-sm text-slate-500 mt-1">Insonlar hayotidagi qarz muammolarini sezilarli
                                    darajada kamaytirish va moliyaviy intizomni oshirish.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div
                                class="w-12 h-12 bg-white rounded-xl shadow-sm flex items-center justify-center text-indigo-600 shrink-0">
                                <i class="fa-solid fa-users"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-900">Jamoaviy ruh</h4>
                                <p class="text-sm text-slate-500 mt-1">Biz har kuni tizimni yanada yaxshilash va yangi
                                    innovatsiyalarni joriy qilish uchun mehnat qilamiz.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 bg-indigo-600 overflow-hidden relative">
        <div class="absolute top-0 right-0 w-96 h-96 bg-white/10 rounded-full -mr-48 -mt-48 blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-indigo-900/50 rounded-full -ml-48 -mb-48 blur-3xl"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative text-center">
            <h2 class="text-3xl lg:text-5xl font-extrabold text-white mb-8">Hayotingizni hoziroq yengillashtiring</h2>
            <p class="text-indigo-100 text-lg mb-12 max-w-xl mx-auto">
                Minglab foydalanuvchilar qatoriga qo'shiling va moliyaviy nazoratni o'z qo'lingizga oling.
            </p>
            <a href="{{ route('register') }}"
               class="inline-flex items-center gap-2 bg-white text-indigo-600 px-10 py-4 rounded-2xl text-lg font-bold shadow-2xl hover:bg-slate-50 transition-all active:scale-95">
                Ro'yxatdan o'tish <i class="fa-solid fa-chevron-right text-xs"></i>
            </a>
        </div>
    </section>
@endsection

@section('footer')
    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-400 py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center gap-3 text-white mb-6">
                        <div class="bg-indigo-600 p-2 rounded-lg">
                            <i class="fa-solid fa-wallet text-lg"></i>
                        </div>
                        <span class="text-2xl font-bold tracking-tight">PayNote</span>
                    </div>
                    <p class="max-w-sm leading-relaxed">
                        Bizning maqsadimiz — qarz munosabatlarini shaffof va oson qilish. Moliyaviy intizomni biz bilan
                        birga oshiring.
                    </p>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6">Foydali havolalar</h4>
                    <ul class="space-y-4">
                        <li><a href="#" class="hover:text-indigo-400 transition-colors">Xususiyatlar</a></li>
                        <li><a href="#" class="hover:text-indigo-400 transition-colors">Narxlar</a></li>
                        <li><a href="#" class="hover:text-indigo-400 transition-colors">Blog</a></li>
                        <li><a href="{{ route('terms') }}" class="hover:text-indigo-400 transition-colors">Foydalanish
                                shartlari</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-bold mb-6">Bog'lanish</h4>
                    <ul class="space-y-4">
                        <li>info@paynote.uz</li>
                        <li>+998 71 123 45 67</li>
                        <li class="flex gap-4 text-xl pt-2">
                            <a href="#" class="hover:text-white transition-colors"><i
                                    class="fa-brands fa-telegram"></i></a>
                            <a href="#" class="hover:text-white transition-colors"><i
                                    class="fa-brands fa-instagram"></i></a>
                            <a href="#" class="hover:text-white transition-colors"><i
                                    class="fa-brands fa-facebook"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="pt-8 border-t border-slate-800 text-center text-sm">
                <p>© {{ date('Y') }} PayNote. Barcha huquqlar himoyalangan.</p>
            </div>
        </div>
    </footer>
@endsection
