<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateIntroductionRequest extends FormRequest
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
            'image' => 'required|max:51200|image',
            'name' => 'required',
            'note' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'image.required' => 'Hình ảnh buộc phải chọn!',
            'image.max' => 'Upload file tối đa có dung lượng là 50Mb!',
            'image.image' => "Upload file không đúng định dạng!",
            'name.required' => 'Tên buộc phải nhập!',
            'note.required' => 'Chú thích buộc phải nhập!'
        ];
    }
}
