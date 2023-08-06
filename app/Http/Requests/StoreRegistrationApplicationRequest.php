<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegistrationApplicationRequest extends FormRequest
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
            'elderly_name' => 'required|string',
            'elderly_gender_name' => 'required|string',
            'elderly_nik_number' => 'required|string',
            'elderly_kk_number' => 'required|string',
            'elderly_kis_number' => 'required|string',
            'elderly_date_born' => 'required|date',
            'elderly_address' => 'required|string',
            'elderly_domicile' => 'required|string',
            'elderly_religion_name' => 'required|string',
            'reporter_name' => 'required|string',
            'reporter_phone_number' => 'required|string',
            'reporter_address' => 'required|string',
            'reporter_job_name' => 'required|string',
            'elderly_physical_condition' => 'required|string',
            'elderly_psychological_condition' => 'required|string',
            'elderly_social_condition' => 'required|string',
            'elderly_economy_condition' => 'required|string',
            'elderly_photo_url' => 'required|image|mimes:jpeg,png,gif|max:2048',
        ];
    }
    public function messages()
    {
        return [
            'elderly_name.required' => 'Nama Lengkap wajib diisi',
            'elderly_gender_name.required' => 'Jenis Kelamin wajib diisi',
            'elderly_nik_number.required' => 'NIK wajib diisi',
            'elderly_kk_number.required' => 'KK wajib diisi',
            'elderly_kis_number.required' => 'KIS wajib diisi',
            'elderly_date_born.required' => 'Tanggal Lahir wajib diisi',
            'elderly_address.required' => 'Alamat wajib diisi',
            'elderly_domicile.required' => 'Domisili wajib diisi',
            'elderly_religion_name.required' => 'Agama wajib diisi',
            'reporter_name.required' => 'Nama Reporter wajib diisi',
            'reporter_phone_number.required' => 'Nomor Telepon wajib diisi',
            'reporter_address.required' => 'Alamat Reporter wajib diisi',
            'reporter_job_name.required' => 'Job Reporter wajib diisi',
            'elderly_physical_condition.required' => 'Kondisi fisik wajib diisi',
            'elderly_psychological_condition.required' => 'Kondisi psikologis wajib diisi',
            'elderly_social_condition.required' => 'Kondisi sosial wajib diisi',
            'elderly_economy_condition.required' => 'Kondisi ekonomis wajib diisi',
            'elderly_photo_url.required' => 'Foto wajib diisi',
        ];
    }
}
