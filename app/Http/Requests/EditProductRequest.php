<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProductRequest extends FormRequest
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
            $old_price = $this->old_price;
        return [
            'image' => 'max:51200|image',
            'name' => 'required',
            'description' => 'required',
            'old_price' => 'required|numeric|min:1',
            'new_price' => 'less_than:old_price,'.$old_price,
        ];
    }

    public function messages()
    {
        return [
            'image.max' => 'Upload file tối đa có dung lượng là 50Mb!',
            'image.image' => 'Hình ảnh không đúng định dạng!',
            'name.required' => 'Tên buộc phải nhập!',
            'description.required' => 'Mô tả buộc phải nhập',
            'old_price.required' => 'Giá cũ buộc phải nhâp!',
            'old_price.numeric' => 'Giá cũ phải là số!',
            'old_price.min' => 'Giá cũ nhỏ nhất là 1!',
            'new_price.less_than' => 'Giá mới phải nhỏ hơn giá cũ!',
        ];
    }
}
