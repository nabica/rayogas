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
                    'title' => 'required|unique:blog_posts',
                    'excerpt_description' => 'required',
                    'description' => 'required'
                ];
                break;

            case 'PUT':
            case 'PATCH':
                return [
                    'title' => 'required|unique:blog_posts,title,' . $this->post,
                    'excerpt_description' => 'required',
                    'description' => 'required'
                ];
                break;
        }
    }
}
