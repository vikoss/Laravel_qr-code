<?php

namespace App\Http\Requests\GraduationPhoto;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
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
            'street'        => 'nullable|string',
            'colony'        => 'nullable|string',
            'city'          => 'nullable|string',
            'state_code'    => 'nullable|string',
            'town'          => 'nullable|string',
            'cp'            => 'nullable|numeric',
            'person_id'     => 'nullable|numeric'
        ];
    }
}
