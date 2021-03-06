<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditSliderRequest extends FormRequest
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
            'image' => 'max:51200|image',
            'caption' => 'required',
            'note' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'image.max' => 'Upload file max is 50Mb',
            'image.image' => "Image isn't format",
            'caption.required' => 'Capiton is required',
            'note.required' => 'Note is required'
        ];
    }
}
