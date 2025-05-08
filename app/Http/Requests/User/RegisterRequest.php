<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|string|min:2',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required|string|min:6'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Введите ваше имя',
            'name.string' => 'Имя должно быть строкой',
            'name.min' => 'Имя должно содержать минимум :min символов',
            'email.required' => 'Введите ваш Email',
            'email.string' => 'Email должен быть строкой',
            'email.email' => 'Email должен содержать символы @ и адреса почты',
            'email.max' => 'Ваш email не должен превышать :max символов',
            'email.unique' => 'Такой email уже существует',
            'password.required' => 'Введите пароль',
            'password.string' => 'Пароль должен быть строкой',
            'password.min' => 'Пароль должен содержать минимум :min символов',
            'password.confirmed' => 'Подтвердите ваш пароль',
            'password_confirmation.required' => 'Введите пароль еще раз',
            'password_confirmation.string' => 'Подтверждение пароля должно быть строкой',
            'password_confirmation.min' => 'Подтверждение пароля должно содержать минимум :min символов',
        ];
    }
}
