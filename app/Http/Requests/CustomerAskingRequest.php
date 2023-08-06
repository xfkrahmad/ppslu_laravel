<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerAskingRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'content' => 'required|string',
            'sender' => 'required|string',
            'sender_email' => 'required|email',
            'subject' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'content.required' => 'Harap masukan pesanmu disini',
            'sender.required' => 'Harap masukan nama kamu disini',
            'sender_email.required' => 'Harap masukan email kamu disini',
            'subject.required' => 'Harap masukan subject kamu disini',
            'sender_email.email' => 'Harap masukan email kamu dengan benar',
        ];
    }
}
