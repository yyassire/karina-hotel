<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGalleryRequest extends FormRequest
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
            //
            'image.*' => 'mimes:jpeg,png,jpg,gif,svg|max:1024'

        ];
    }

    public function messages()
    {
        return [
            'image.mimes' => 'Hatalı Fotoğraf Uzantısı',
            'image.max' => 'Fotoğraf Boyutu 1 MB den Büyük !',

        ];
    }
}
