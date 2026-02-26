<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'accepted' => ':attribute maydoni qabul qilinishi kerak.',
    'accepted_if' => ':other :value bo‘lganda :attribute maydoni qabul qilinishi kerak.',
    'active_url' => ':attribute maydoni yaroqli URL bo‘lishi kerak.',
    'after' => ':attribute maydoni :date dan keyingi sana bo‘lishi kerak.',
    'after_or_equal' => ':attribute maydoni :date dan keyingi yoki unga teng sana bo‘lishi kerak.',
    'alpha' => ':attribute maydoni faqat harflardan iborat bo‘lishi kerak.',
    'alpha_dash' => ':attribute maydoni faqat harflar, raqamlar, chiziqcha va pastki chiziqdan iborat bo‘lishi kerak.',
    'alpha_num' => ':attribute maydoni faqat harflar va raqamlardan iborat bo‘lishi kerak.',
    'any_of' => ':attribute maydoni noto‘g‘ri.',
    'array' => ':attribute maydoni massiv bo‘lishi kerak.',
    'ascii' => ':attribute maydoni faqat ASCII belgilaridan iborat bo‘lishi kerak.',
    'before' => ':attribute maydoni :date dan oldingi sana bo‘lishi kerak.',
    'before_or_equal' => ':attribute maydoni :date dan oldingi yoki unga teng sana bo‘lishi kerak.',

    'between' => [
        'array' => ':attribute maydonida :min dan :max gacha element bo‘lishi kerak.',
        'file' => ':attribute hajmi :min va :max kilobayt oralig‘ida bo‘lishi kerak.',
        'numeric' => ':attribute qiymati :min va :max oralig‘ida bo‘lishi kerak.',
        'string' => ':attribute uzunligi :min va :max belgilar oralig‘ida bo‘lishi kerak.',
    ],

    'boolean' => ':attribute maydoni true yoki false bo‘lishi kerak.',
    'can' => ':attribute maydonida ruxsat etilmagan qiymat mavjud.',
    'confirmed' => ':attribute tasdiqlanishi mos kelmadi.',
    'contains' => ':attribute maydonida talab qilingan qiymat yo‘q.',
    'current_password' => 'Parol noto‘g‘ri.',
    'date' => ':attribute maydoni yaroqli sana bo‘lishi kerak.',
    'date_equals' => ':attribute maydoni :date ga teng sana bo‘lishi kerak.',
    'date_format' => ':attribute maydoni :format formatiga mos bo‘lishi kerak.',
    'decimal' => ':attribute maydoni :decimal xonali bo‘lishi kerak.',
    'declined' => ':attribute maydoni rad etilishi kerak.',
    'declined_if' => ':other :value bo‘lganda :attribute maydoni rad etilishi kerak.',
    'different' => ':attribute va :other maydonlari bir xil bo‘lmasligi kerak.',
    'digits' => ':attribute maydoni :digits raqamdan iborat bo‘lishi kerak.',
    'digits_between' => ':attribute maydoni :min va :max raqam oralig‘ida bo‘lishi kerak.',
    'dimensions' => ':attribute rasm o‘lchamlari noto‘g‘ri.',
    'distinct' => ':attribute maydonida takrorlanuvchi qiymat mavjud.',
    'doesnt_contain' => ':attribute maydoni quyidagi qiymatlarni o‘z ichiga olmasligi kerak: :values.',
    'doesnt_end_with' => ':attribute maydoni quyidagi qiymatlar bilan tugamasligi kerak: :values.',
    'doesnt_start_with' => ':attribute maydoni quyidagi qiymatlar bilan boshlanmasligi kerak: :values.',
    'email' => ':attribute maydoni yaroqli email manzil bo‘lishi kerak.',
    'encoding' => ':attribute maydoni :encoding kodlashida bo‘lishi kerak.',
    'ends_with' => ':attribute maydoni quyidagi qiymatlardan biri bilan tugashi kerak: :values.',
    'enum' => 'Tanlangan :attribute noto‘g‘ri.',
    'exists' => 'Tanlangan :attribute mavjud emas.',
    'extensions' => ':attribute maydoni quyidagi kengaytmalardan biriga ega bo‘lishi kerak: :values.',
    'file' => ':attribute fayl bo‘lishi kerak.',
    'filled' => ':attribute maydoni to‘ldirilishi kerak.',

    'gt' => [
        'array' => ':attribute maydonida :value dan ko‘p element bo‘lishi kerak.',
        'file' => ':attribute hajmi :value kilobaytdan katta bo‘lishi kerak.',
        'numeric' => ':attribute qiymati :value dan katta bo‘lishi kerak.',
        'string' => ':attribute uzunligi :value belgidan ko‘p bo‘lishi kerak.',
    ],

    'gte' => [
        'array' => ':attribute maydonida kamida :value ta element bo‘lishi kerak.',
        'file' => ':attribute hajmi :value kilobaytdan kam bo‘lmasligi kerak.',
        'numeric' => ':attribute qiymati :value dan kam bo‘lmasligi kerak.',
        'string' => ':attribute uzunligi kamida :value belgi bo‘lishi kerak.',
    ],

    'hex_color' => ':attribute yaroqli HEX rang bo‘lishi kerak.',
    'image' => ':attribute rasm bo‘lishi kerak.',
    'in' => 'Tanlangan :attribute noto‘g‘ri.',
    'in_array' => ':attribute :other ichida mavjud bo‘lishi kerak.',
    'integer' => ':attribute butun son bo‘lishi kerak.',
    'ip' => ':attribute yaroqli IP manzil bo‘lishi kerak.',
    'ipv4' => ':attribute yaroqli IPv4 manzil bo‘lishi kerak.',
    'ipv6' => ':attribute yaroqli IPv6 manzil bo‘lishi kerak.',
    'json' => ':attribute yaroqli JSON bo‘lishi kerak.',
    'lowercase' => ':attribute maydoni kichik harflarda bo‘lishi kerak.',

    'max' => [
        'array' => ':attribute maydonida :max tadan ko‘p element bo‘lmasligi kerak.',
        'file' => ':attribute hajmi :max kilobaytdan oshmasligi kerak.',
        'numeric' => ':attribute qiymati :max dan oshmasligi kerak.',
        'string' => ':attribute uzunligi :max belgidan oshmasligi kerak.',
    ],

    'min' => [
        'array' => ':attribute maydonida kamida :min ta element bo‘lishi kerak.',
        'file' => ':attribute hajmi kamida :min kilobayt bo‘lishi kerak.',
        'numeric' => ':attribute qiymati kamida :min bo‘lishi kerak.',
        'string' => ':attribute uzunligi kamida :min belgi bo‘lishi kerak.',
    ],

    'numeric' => ':attribute son bo‘lishi kerak.',
    'required' => ':attribute maydoni majburiy.',
    'same' => ':attribute va :other mos kelishi kerak.',
    'string' => ':attribute matn bo‘lishi kerak.',
    'timezone' => ':attribute yaroqli vaqt zonasi bo‘lishi kerak.',
    'unique' => ':attribute allaqachon band qilingan.',
    'uploaded' => ':attribute yuklab bo‘lmadi.',
    'url' => ':attribute yaroqli URL bo‘lishi kerak.',
    'uuid' => ':attribute yaroqli UUID bo‘lishi kerak.',

    /*
    |--------------------------------------------------------------------------
    | Custom Attributes
    |--------------------------------------------------------------------------
    */

    'attributes' => [
        'email' => 'Elektron pochta',
        'password' => 'Parol',
        'password_confirmation' => 'Parolni tasdiqlash',
    ],

];
