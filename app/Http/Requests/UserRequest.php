<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        return [
            'start' => 'required',
            'end' => 'required',
            'tipe' => 'required',
            'akun_id' => 'required',
            'nama' => 'required | min:2 | max:150',
            'nidn' => 'required | min:10 | max:10',
            'departement_id' => 'required',
            'jabatan_id' => 'required',
            'ttl' => 'required | min:5 | max:150',
            'alamat' => 'required | min:5 | max:150',
            'agama' => 'required',
            'jk' => 'required',
            'no_hp' => 'required | min:12 | max:150',
        ];
    }

       protected function failedValidation(Validator $validator)
       {
        throw new HttpResponseException(response()->json([
            'response' => array(
                'icon' => 'error',
                'title' => 'Validasi Gagal',
                'message' => 'Data yang di input tidak tervalidasi',
            ),
            'errors' => array(
                'length' => count($validator->errors()),
                'data' => $validator->errors()
            ),
        ], 422));
       }
}
