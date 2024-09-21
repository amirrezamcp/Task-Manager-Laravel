<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TasksRequest extends FormRequest
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
            'title' => ['required', 'max:256'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'عنوان تسک الزامی است',
            'title.max' => 'عنوان تسک نباید بیشتر از 256 کاراکتر باشد.',
        ];
    }
}
