<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateGalleryRequest extends FormRequest
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
            'name' => 'required',
            'image' => 'required|max:102400|mimes:jpeg,bmp,png,gif,svg,pdf,jpg,mp4'
        ];
    }

    public function messages()
    {
        return [
            'image.required' => 'Hình ảnh buộc phải chọn!',
            'image.max' => 'Upload file tối đa có dung lượng là 100Mb!',
            'image.mimes' => 'Hình ảnh không đúng định dạng (jpeg,bmp,png,gif,svg,pdf,jpg,mp4)!',
            'name.required' => 'Tên hình ảnh buộc phải nhập!'
        ];
    }
}
