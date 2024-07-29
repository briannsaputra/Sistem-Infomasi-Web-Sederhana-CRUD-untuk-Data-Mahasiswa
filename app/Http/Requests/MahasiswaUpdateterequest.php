<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MahasiswaUpdateterequest extends FormRequest
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
            'nim' => 'max:12',
            'nama' => 'max:50',
        ];
    }

    public function messages()
    {
        return [
            'nim.max' => 'NIM Maksimal :max!!',
            'nama.max' => 'Nama Maksimal :ma!!',
        ];
    }
}
