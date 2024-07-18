<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductKami extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'jenis_barang' => 'required',
            'deskripsi' => 'required',
            'price' => 'required',
            'image' => 'required | mimes:png,jpg,jpeg | max:2048'
        ];
    }
}