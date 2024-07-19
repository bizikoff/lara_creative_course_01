<?php

namespace App\Http\Requests\Api\Profile;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'login' => 'required|unique:profiles,login',
            'first_name' => 'nullable|string',
            'last_name' => 'nullable|string',
            'gender' => 'nullable|integer',
            'born_at' => 'nullable|date_format:d/m/Y',
            'avatar_path' => 'nullable|string',
            'is_active' => 'nullable|boolean',
        ];
    }
}
