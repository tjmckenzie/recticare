<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreSampleRequest extends Request
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
            'name'                 => 'required',
            'title'                => 'required',
            'npi'                  => 'required',
            'state_license_number' => 'required',
            'phone'                => 'required',
            'fax'                  => 'required',
            'practice_name'        => 'required',
            'address'              => 'required',
            'city'                 => 'required',
            'state'                => 'required',
            'zipcode'              => 'required',
            'reference'            => 'required',
            'reference_other'      => 'required_if:reference,other',
        ];
    }
}
