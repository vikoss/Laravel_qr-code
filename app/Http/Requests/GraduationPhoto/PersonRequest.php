<?php

namespace App\Http\Requests\GraduationPhoto;

use Illuminate\Foundation\Http\FormRequest;

class PersonRequest extends FormRequest
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
            'name'              => 'required|string',
            'first_surname'     => 'required|string',
            'second_surname'    => 'required|string',
            'phone'             => 'required|numeric',
            'email'             => 'required|email',
            'face_photo_url'    => 'required|url'
        ];
    }
}
