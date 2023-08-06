<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateSystemConfigurationRequest extends FormRequest
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
            'institute_name' => 'required|string',
            'institute_name_detail' => 'required|string',
            'institute_description' => 'required|string',
            'user-photo' => 'nullable|image|mimes:jpeg,png,gif|max:2048',
            'institute_instagram_url' => 'required|url',
            'institute_facebook_url' => 'required|url',
            'institute_twitter_url' => 'required|url',
            'institute_phone' => 'required|regex:/^(\+\d{1,3}\s?)?(\(\d{1,5}\))?[\s\d\-]+$/',
            'institute_email' => 'required|email',
            'institute_address' => 'required|string',
            'people_get_benefit_count' =>
            [
                'required',
                'numeric',
                function ($attribute, $value, $fail) {
                    if ($value <= 0) {
                        $fail("Jumlah harus lebih besar dari 0");
                    }
                },
            ],
            'province_id'
            => [
                'required',
                Rule::exists('provinces', 'id'),
            ],
            'city_id' => [
                'required',
                Rule::exists('cities', 'id')->where(function ($query) {
                    $query->where('province_id', (int)$this->input('province_id'));
                }),
            ],
            'postal_code' => 'required|string',
            'institute_gmaps_url' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'institute_name.required' => 'Nama Instansi wajib diisi.',
            'institute_name_detail.required' => 'Nama Instansi Detail wajib diisi.',
            'institute_description.required' => 'Deskripsi Instansi wajib diisi.',
            'user-photo.image' => 'Foto wajib berupa gambar.',
            'institute_facebook_url.required' => ' URL Facebook wajib diisi.',
            'institute_facebook_url.url' => 'sepertinya bukan sebuah URL.',
            'institute_instagram_url.required' => 'Instagram wajib diisi.',
            'institute_instagram_url.url' => 'sepertinya bukan sebuah URL.',
            'institute_twitter_url.required' => 'Twitter wajib diisi.',
            'institute_twitter_url.url' => 'sepertinya bukan sebuah URL.',
            'people_get_benefit_count.required' => 'Harap isi jumlah penerima manfaat',
            'people_get_benefit_count.numeric' => 'Jumlah harus angka',
            'province_id.required' => 'Provinsi wajib diisi.',
            'city_id.required' => 'Kota wajib diisi.',
            'city_id.exists' => 'Kota tersebut bukan merupakan bagian dari Provinsi yang dipilih',
            'postal_code.required' => 'Kode Pos wajib diisi.',
            'institute_gmaps_url.required' => 'Google Maps URL wajib diisi.',
        ];
    }
}
