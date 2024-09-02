<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class MotorStoreRequest extends FormRequest
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
            'nama_motor' => 'required|string|max:255',
            'harga_sewa' => 'required|numeric',
            'gambar' => 'required|image',
            'bahan_bakar' => 'required|string|max:255',
            'jumlah_kursi' => 'required|integer',
            'transmisi' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'charger' => 'required|boolean',
            'hybrid' => 'required|boolean',
            'tumbler_space' => 'required|boolean',
            'GPS' => 'required|boolean',
        ];
    }
}

