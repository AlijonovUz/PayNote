@extends('layouts.app')

@section('title')
    Foydalanish shartlari
@endsection

@section('body-class')
    bg-gray-50 text-slate-800 font-sans antialiased min-h-screen py-10 px-4 sm:px-6 lg:px-8
@endsection

@section('content')
    <div class="max-w-3xl mx-auto">
        <div class="mb-8 flex items-center justify-between">
            <a href="{{ route('register') }}"
               class="inline-flex items-center text-sm font-medium text-slate-500 hover:text-indigo-600 transition-colors">
                <i class="fa-solid fa-arrow-left mr-2"></i>Orqaga
            </a>
            <div class="bg-indigo-600 text-white p-2 rounded-lg shadow-md">
                <i class="fa-solid fa-wallet text-sm"></i>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="p-8 sm:p-12">
                <h1 class="text-3xl font-bold text-slate-900 mb-6">Foydalanish shartlari</h1>
                <p class="text-slate-500 mb-8 text-sm italic">Oxirgi yangilanish: 23-Fevral, 2026</p>

                <div class="space-y-8 text-slate-600 leading-relaxed text-sm">
                    <!-- Section 1 -->
                    <section>
                        <h2 class="text-lg font-bold text-slate-900 mb-3 flex items-center gap-2">
                            <span class="w-1.5 h-6 bg-indigo-500 rounded-full"></span>
                            1. Umumiy qoidalar
                        </h2>
                        <p>
                            Ushbu "Qarzdorlar Ro'yxati" ilovasi (keyingi o'rinlarda "Xizmat") jismoniy va yuridik
                            shaxslarga o'zlarining qarz munosabatlarini tartibga solishda ko'maklashuvchi vosita
                            hisoblanadi. Xizmatdan foydalanish orqali siz mazkur shartlarga to'liq rozilik bildirasiz.
                        </p>
                    </section>

                    <!-- Section 2 -->
                    <section>
                        <h2 class="text-lg font-bold text-slate-900 mb-3 flex items-center gap-2">
                            <span class="w-1.5 h-6 bg-indigo-500 rounded-full"></span>
                            2. Ma'lumotlar maxfiyligi va saqlanishi
                        </h2>
                        <ul class="list-disc pl-5 space-y-2">
                            <li>Siz kiritgan barcha ma'lumotlar (qarzdorlarning ismlari, telefon raqamlari va qarz
                                miqdori) faqat sizning hisobingizga tegishli bo'lib, uchinchi shaxslarga oshkor
                                etilmaydi.
                            </li>
                            <li>Foydalanuvchi o'z paroli va hisobining xavfsizligi uchun shaxsan mas'uldir.</li>
                            <li>Tizim ma'lumotlarni himoya qilish uchun zamonaviy shifrlash usullaridan foydalanadi.
                            </li>
                        </ul>
                    </section>

                    <!-- Section 3 -->
                    <section>
                        <h2 class="text-lg font-bold text-slate-900 mb-3 flex items-center gap-2">
                            <span class="w-1.5 h-6 bg-indigo-500 rounded-full"></span>
                            3. Foydalanuvchi majburiyatlari
                        </h2>
                        <p>
                            Foydalanuvchi ilovaga faqat haqiqiy va ishonchli ma'lumotlarni kiritishga majbur. Ilovadan
                            noqonuniy maqsadlarda yoki uchinchi shaxslarning shaxsiy daxlsizligini buzish uchun
                            foydalanish qat'iyan taqiqlanadi.
                        </p>
                    </section>

                    <!-- Section 4 -->
                    <section>
                        <h2 class="text-lg font-bold text-slate-900 mb-3 flex items-center gap-2">
                            <span class="w-1.5 h-6 bg-indigo-500 rounded-full"></span>
                            4. Mas'uliyatni cheklash
                        </h2>
                        <p>
                            Xizmat ma'lumotlarni saqlash va hisoblashda qulaylik yaratadi, ammo qarzni undirish yoki
                            huquqiy munosabatlarda kafil bo'la olmaydi. Tizimdagi xatoliklar yoki kutilmagan texnik
                            nosozliklar tufayli yuzaga kelishi mumkin bo'lgan holatlar uchun ma'muriyat javobgarlikni
                            o'z zimmasiga olmaydi.
                        </p>
                    </section>

                    <!-- Section 5 -->
                    <section>
                        <h2 class="text-lg font-bold text-slate-900 mb-3 flex items-center gap-2">
                            <span class="w-1.5 h-6 bg-indigo-500 rounded-full"></span>
                            5. Shartlarning o'zgarishi
                        </h2>
                        <p>
                            Ma'muriyat mazkur foydalanish shartlarini istalgan vaqtda bir tomonlama o'zgartirish
                            huquqiga ega. O'zgarishlar e'lon qilingan vaqtdan boshlab kuchga kiradi.
                        </p>
                    </section>
                </div>

                <div class="mt-12 pt-8 border-t border-slate-100 flex justify-center">
                    <a href="{{ route('register') }}"
                       class="bg-indigo-600 text-white px-8 py-3 rounded-xl font-bold hover:bg-indigo-700 transition-all shadow-lg shadow-indigo-100 active:scale-95">
                        Tushunarli, qaytish
                    </a>
                </div>
            </div>
        </div>

        <p class="mt-8 text-center text-sm text-slate-400">
            © {{ date('Y') }} Qarzdorlar Ro'yxati. Barcha huquqlar himoyalangan.
        </p>
    </div>
@endsection
