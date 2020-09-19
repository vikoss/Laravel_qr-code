<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RefillRequest extends FormRequest
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
            'vehicle_uuid'  => "required",
            'mileage'       => "required",
            'type'          => "required",
            'liters'        => "required",
            'ticket_id'     => "required",
            'ticket_amount' => "required",
        ];
    }
}
