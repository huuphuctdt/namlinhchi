<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHeaderRequets extends FormRequest
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
            'logo' => 'max:10240|mimes:png',
            'tagline' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'logo.max' => 'Max upload is 10Mb',
            'logo.mimes' => 'Images must has extension PNG',
            'tagline.required' => 'Tag Line is required'
        ];
    }
}
