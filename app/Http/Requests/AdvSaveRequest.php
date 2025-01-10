<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdvSaveRequest extends FormRequest
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
            //
            'title' => ['required', 'string', 'max:255','min:5'],
            'link' => ['required', 'string', 'max:255','min:5'],
            'status' => ['required', 'boolean'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'max_click' => ['required','numeric'],
        ];
    }
}
