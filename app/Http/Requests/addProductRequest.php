<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addProductRequest extends FormRequest
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
            'price' => 'required|min:1',
            'quantity' => 'required|min:3|max:150',
            'description' => 'required|min:10|max:1000'
        ];
    }

    public function messages () {
        return [
            'name.required' => 'Поле обязательно для заполнения',
            'name.min' => 'Минимальная длина имени 3 символа',
            'name.max' => 'Максимальная длина имени 50 символов',
            'price.required' => 'Поле обязательно для заполнения',
            'price.min' => 'Введена некорректная цена',
            'quantity.required' => 'Поле обязательно для заполнения',
            'quantity.min' => 'Минимальная длина темы 3 символа',
            'quantity.max' => 'Максимальная длина тема 150 символов',
            'description.required' => 'Поле обязательно для заполнения',
            'description.min' => 'Минимальная длина сообщения 10 символов',
            'description.max' => 'Максималькая длина сообщения 1000 символов'
        ];
    }
}
