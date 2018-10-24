<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnunciosFormRequest extends FormRequest
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
        return [
            'TipoAnuncio'=> 'required|max:20',
            'NombreAnuncio'=> 'required|max:20',
            'TextoAnuncio'=> 'required|max:20',
            'UrlImagen'=> 'required|max:50'
        ];
    }
}
