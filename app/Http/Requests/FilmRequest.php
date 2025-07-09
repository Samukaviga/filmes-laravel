<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:3',
            'category' => 'required',
            'image' => 'nullable',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O nome do filme é obrigátorio.',
            'name.min:3' => 'O nome do filme precisa ter pelo menos 3 caracteres.'
        ];
    }
}
