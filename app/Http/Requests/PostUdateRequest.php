<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostUdateRequest extends FormRequest
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
            'post_title'     => 'required',
            'post_slug'      => 'required|max:100|regex:/^[a-zA-Z-]{1,100}$/',
            'post_content'   => 'required',
            'post_thumbnail' => 'mimes:jpeg,jpg,png,gif',
        ];
    }

    public function messages()
    {
        return [
            'post_title.required'   => 'Nama tidak boleh kosong',
            'post_slug.required'    => 'slug tidak boleh kosong',
            'post_slug.regex'       => 'slug hanya boleh diisi dengan huruf dan (-) sebagai pengganti spasi',
            'post_slug.max'         => 'slug tidak boleh melebihi dari 100 karakter',
            'post_content.required' => 'Konten minimal 10 karakter',
            'post_thumbnail.mimes'  => 'Tipe gambar harus jpeg, jpg, png, bmp, tiff, gif',
        ];
    }
}
