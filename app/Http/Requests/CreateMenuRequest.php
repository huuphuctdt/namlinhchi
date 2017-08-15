<?php

namespace App\Http\Requests;

use App\Models\Menu;
use Illuminate\Foundation\Http\FormRequest;

class CreateMenuRequest extends FormRequest
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
        return  [
            'menu_name' => 'required|unique:menu,name',
        ];
    }

    public function messages()
    {
        return [
            'menu_name.required' => 'Menu name is required.',
            'menu_name.unique' => 'Menu name is exists in system.'
        ];
    }
}
