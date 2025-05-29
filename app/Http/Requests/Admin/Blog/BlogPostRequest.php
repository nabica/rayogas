<?php

namespace App\Http\Requests\Admin\Blog;

use Illuminate\Foundation\Http\FormRequest;

class BlogPostRequest extends FormRequest
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
        //dd($this->post);

        switch ($this->method()) {
            case 'POST':
                return [
                    'title' => 'required|unique:blogs',
                    'body_blog' => 'required',
                    'card_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
                ];
                break;

            case 'PUT':
            case 'PATCH':
                return [
                    'title' => 'required' . $this->blog,
                    'body_blog' => 'required',
                ];
                break;
        }
    }
    public function attributes()
    {
        return [
            'body_blog' => 'contenido del blog',
            'card_image' => 'imagen de la tarjeta del blog',
        ];
    }
}