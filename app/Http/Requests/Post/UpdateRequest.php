<?php

namespace App\Http\Requests\Post;

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
            'title' => 'required|string',
            'content' => 'required|string',
            'author' => 'nullable|string',
            'status' => 'nullable|integer',
            'description' => 'nullable|string',
            'image_path' => 'nullable|string',
            'category' => 'nullable|string',
            'tag' => 'nullable|string',
        ];
    }
}
