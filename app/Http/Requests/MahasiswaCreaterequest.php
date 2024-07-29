<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MahasiswaCreaterequest extends FormRequest
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
            'nim' => 'unique:mahasiswas|max:12|required',
            'nama' => 'max:50|required',
            'prodi_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nim.required' => 'Nim Harus di isi!',
            'nim.max' => 'NIM Maksimal :max!!',
            'nim.unique' => 'NIM Sudah Dpakai!',
            'nama.max' => 'Nama Maksimal :max!!',
            'nama.required' => 'Nama Harus di isi!',
            'prodi_id.required' => 'Prodi Harus di isi!'
        ];
    }
}
