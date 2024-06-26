<?php

namespace App\Http\Requests\Api\Profile;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|string',
            'last_name' => 'nullable|string',
            'gender' => 'nullable|integer',
            'born_at' => 'required|date_format:d/m/Y',
            'avatar_path' => 'nullable|string',
            'is_active' => 'nullable|boolean',
        ];
    }
}
