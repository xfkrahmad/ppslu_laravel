<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateEmployeeRequest extends FormRequest
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
        $employeeId = $this->route('employee');
        return [
            'nip' => [
                'required',
                Rule::unique('employees')->ignore($employeeId, 'nip'),
            ],
            'name' => 'required|string',
            'title_name' => 'required|string',
            'position_name' => 'required|string',
            'motto_description' => 'required|string',
            'photo_url' => 'nullable|image|mimes:jpeg,png,gif|max:2048'
        ];
    }

    public function messages()
    {
        return [
            'nip.required' => 'NIP wajib diisi.',
            'name.required' => 'Nama wajib diisi.',
            'title_name.required' => ' Gelar wajib diisi.',
            'position_name.required' => 'Jabatan wajib diisi.',
            'motto_description.required' => 'Motto wajib diisi.',
            'photo_url.required' => 'Foto wajib diisi.',
            'photo_url.image' => 'Foto wajib berupa gambar.',
        ];
    }
}
