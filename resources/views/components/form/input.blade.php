@props([
    'name',
    'type' => "text",
    'icon' => "",
    'label' => "",
    'placeholder' => "",
    'autocomplete' => "",
    'rows' => 3,
    'value' => null,
])

<div>
    <label for="{{ $name }}" class="block text-sm font-medium text-slate-700 mb-1">{{ $label }}</label>
    <div class="relative">
        <div
            class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">
            <i class="{{ $icon }}"></i>
        </div>
        <input id="{{ $name }}" name="{{ $name }}" type="{{ $type }}" autocomplete="{{ $autocomplete }}"
               placeholder="{{ $placeholder }}"
               class="block w-full pl-10 pr-3 py-2.5 border border-slate-200 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 text-sm transition-all shadow-sm placeholder-slate-400"
               value="{{ old($name, $value) }}">
    </div>

    @error($name)
    <p class="mt-1 text-sm text-red-600">
        {{ $message }}
    </p>
    @enderror
</div>
