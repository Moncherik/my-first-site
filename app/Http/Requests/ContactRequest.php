<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
        'name' => 'required|min:2|max:40',
        'email' => ['required','min:5', 'max:100', 'email'], 
        'subject' => ['required', 'min:5', 'max:100'],
        'message' => ['required', 'min:5', 'max:1000'],
        ];
    }
    public function messages(): array
{
    return[
        'name.required'=>'Пожалуйста введите имя',
        'email.required'=>'Пожалуйста введите email',
        'subject.required'=>'Пожалуйста введите тему',
        'message.required'=>'Пожалуйста введите сообщение',
        'name.min'=>'Имя должно быть не менее 2 символов'
    ];
}
}
