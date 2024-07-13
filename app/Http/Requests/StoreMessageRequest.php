<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMessageRequest extends FormRequest
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
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
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
            'name' => __('keywords.name'),
            'email' => __('keywords.email'),
            'subject' => __('keywords.subject'),
            'message' => __('keywords.message'),
        ];
    }
}
