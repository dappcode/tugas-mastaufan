<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ErrorFromRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        switch( $this->method() ) {
            case "POST":
                return [
                    'judul' => 'required',
                    'tahun' => 'required', 
                    'pengarang' => 'required',
                    'halaman' => 'required',
                ];       
                break;
                
            case "PATCH":
                return [
                    'judul' => 'required',
                    'tahun' => 'required', 
                    'pengarang' => 'required',
                    'halaman' => 'required',
                ];      
                break;
            
        }
    }

    public function messages()
    {
        return [
            'judul.required' => 'Isi Judul Dulu!!',
            'tahun.required' => 'Isi tahun Dulu!!',
            'pengarang.required' => 'Isi pengarang Dulu!!',
            'halaman.required' => 'Isi halaman Dulu!!',
        ];
    }
}
