<?php

namespace App\Http\Requests\Api\Comment;

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
            'content' => 'nullable|string',
            'profile_login' => 'nullable|string',
            'post_title' => 'nullable|string'
        ];
    }
}
