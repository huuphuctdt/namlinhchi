<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
            'image' => 'required|image|max:51200',
            'post_category' => 'required',
            'name' => 'required',
            'content' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'image.required' => 'Hình ảnh buộc phải chọn!',
            'image.max' => 'Upload file tối đa có dung lượng là 50Mb!',
            'image.image' => 'Hình ảnh không đúng định dạng!',
            'post_category.required' => 'Danh mục buộc phải chọn!',
            'name.required' => 'Tên bài viết buộc phải nhập!',
            'content.required' => 'Nội dung bài viết buộc phải nhập!'
        ];
    }
}
