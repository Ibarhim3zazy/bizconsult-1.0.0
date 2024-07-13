<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFeatureRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
            'description' => 'required|string',
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     * 
     * @return array
     */
    public function attributes(): array
    {
        return [
            'title' => __('keywords.title'),
            'icon' => __('keywords.icon'),
            'description' => __('keywords.description'),
        ];
    }
}
