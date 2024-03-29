<?php

namespace App\Http\Requests\GraduationPhoto;

use Illuminate\Foundation\Http\FormRequest;

class InviteRequest extends FormRequest
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
            'event_id'          => 'required|numeric',
            'guest_id'          => 'required|numeric',
            'host_id'           => 'required|numeric',
            'relationship_id'   => 'required|numeric'
        ];
    }
}
