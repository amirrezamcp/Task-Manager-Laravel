<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'link' => 'required|exists:people,reset_token',
            'password' => 'required|min:8',
            'confirm_password' => 'same:password',
        ];
    }
    
    public function messages()
    {
        return [
            'link.required' => 'لطفاً لینک را وارد کنید.',
            'link.exists' => 'این لینک معتبر نیست.',
            'password.required' => 'لطفاً رمز عبور را وارد کنید.',
            'password.min' => 'رمز عبور باید حداقل ۸ کاراکتر باشد.',
            'confirm_password.same' => 'تکرار رمز عبور با رمز عبور مطابقت ندار',
        ];
    }
}