<?php

namespace App\Http\Requests\Api\Profile;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class IndexRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'login' => 'nullable|string',
            'first_name' => 'nullable|string',
            'last_name' => 'nullable|string',
            'gender' => 'nullable|string',
            'born_at_from' => 'nullable|date_format:Y-m-d',
            'born_at_to' => 'nullable|date_format:Y-m-d',
            'email' => 'nullable|string'
        ];
    }
}
