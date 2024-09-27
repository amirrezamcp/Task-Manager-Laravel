<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PeopleRequest extends FormRequest
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
            'email' => 'required|email',
            'password' => 'min:2',
            'confirm_password' => 'same:password',
        ];
    }
    
    public function messages()
    {
        return [
            'username.required' => 'نام الزامی است',
            'email.required' => 'ایمیل الزامی است',
            'email.email' => 'ایمیل نامعتبر است',
            'password.min' => 'رمز عبور باید حداقل ۸ رقم باشد',
            'confirm_password.same' => 'تکرار رمز عبور با رمز عبور مطابقت ندار',
        ];
    }
}
