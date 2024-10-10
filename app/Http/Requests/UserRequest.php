<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'username' => 'required',
            'email' => 'required', 'email',
            'current_password' => 'required',
            'new_password' => 'required', 'min:8',
            'password_confirmation' => 'same:new_password',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'نام الزامی است',
            'email.required' => 'ایمیل الزامی است',
            'email.email' => 'ایمیل نامعتبر است',
            'current_password.required' => 'رمز عبور فعلی الزامی است',
            'new_password.required' => 'رمز عبور الزامی است',
            'new_password.min' => 'رمز عبور باید حداقل ۸ رقم باشد',
            'password_confirmation.same' => 'تکرار رمز عبور با رمز عبور مطابقت ندار',
        ];
    }
}
