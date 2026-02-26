@props([
    'name',
    'label' => "",
    'placeholder' => "",
    'rows' => 3,
    'value' => null,
])

<div>
    <label for="{{ $name }}" class="block text-sm font-medium text-slate-700 mb-1">{{ $label }}</label>

    <textarea id="{{ $name }}" name="{{ $name }}" rows="{{ $rows }}" placeholder="{{ $placeholder }}"
        {{ $attributes->class(['block w-full px-3 py-2.5 border border-slate-200 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500
            text-sm transition-shadow shadow-sm placeholder-slate-400 resize-none']) }}
    >{{ old($name, $value) }}</textarea>

    @error($name)
    <p class="mt-1 text-sm text-red-600">
        {{ $message }}
    </p>
    @enderror
</div>
