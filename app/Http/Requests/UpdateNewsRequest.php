<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNewsRequest extends FormRequest
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
            'title' => 'required|string',
            'video_url' => 'nullable|url',
            'content' => 'required|string',
            'photo_url' => 'nullable|image|mimes:jpeg,png,gif|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Judul Wajib Diisi!',
            'title.string' => 'Judul harus berupa string!',
            'content.required' => 'Isi Wajib Diisi!',
            'content.string' => 'Isi harus berupa string!',
            'photo_url.required' => 'Foto Wajib Diisi!',
            'photo_url.image' => 'Foto harus berupa gambar!',
            'photo_url.mimes' => 'Foto harus berupa gambar!',
        ];
    }
}
