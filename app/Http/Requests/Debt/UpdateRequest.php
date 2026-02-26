<?php

namespace App\Http\Requests\Debt;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['sometimes', 'string', 'max:255'],
            'phone' => ['sometimes', 'string', 'max:13'],
            'note' => ['sometimes'],
        ];
    }

    public function attributes()
    {
        return [
            'name' => "To'liq ism",
            'phone' => "Telefon raqam",
            'amount' => "Qarz miqdori",
            'note' => "Izoh",
        ];
    }
}
