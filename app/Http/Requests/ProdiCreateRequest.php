<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdiCreateRequest extends FormRequest
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
            'nama_prodi' => 'max:50|required',
            'kode_prodi' => 'unique:prodi|max:10|required',
            'kaprodi' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nama_prodi.required' => 'Nama Wajib Di Isi',
            'nama_prodi.max' => 'Nama Prodi Maksimal 50',
            'kode_prodi.unique' => 'Kode Prodi Sudah Digunakan',
            'kode_prodi.max' => 'Kode Maxsimal :max',
            'kode_prodi.required' => 'Kode Prodi Tidak Boleh Kosong',
            'kaprodi.required' => 'Nama Kepala Prodi Tidak Boleh Kosong'
        ];
    }
}
