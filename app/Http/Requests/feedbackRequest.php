<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class feedbackRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:50',
            'email' => 'required|email',
            'theme' => 'required|min:3|max:150',
            'message' => 'required|min:10|max:1000'
        ];
    }

    public function messages () {
        return [
            'name.required' => 'Поле обязательно для заполнения',
            'name.min' => 'Минимальная длина имени 3 символа',
            'name.max' => 'Максимальная длина имени 50 символов',
            'email.required' => 'Поле обязательно для заполнения',
            'email.email' => 'Введен некорректный почтовый адрес',
            'theme.required' => 'Поле обязательно для заполнения',
            'theme.min' => 'Минимальная длина темы 3 символа',
            'theme.max' => 'Максимальная длина тема 150 символов',
            'message.required' => 'Поле обязательно для заполнения',
            'message.min' => 'Минимальная длина сообщения 10 символов',
            'message.max' => 'Максималькая длина сообщения 1000 символов'
        ];
    }
}
