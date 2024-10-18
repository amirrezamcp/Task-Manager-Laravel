<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmailRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => 'required|email|exists:people,email'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'ایمیل الزامی است',
            'email.exists' => 'ایمیل وجود است',
            'email.email' => 'ایمیل نامعتبر است',
        ];
    }
}
