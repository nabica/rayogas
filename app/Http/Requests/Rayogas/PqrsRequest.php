<?php

namespace App\Http\Requests\Rayogas;

use Illuminate\Foundation\Http\FormRequest;

class PqrsRequest extends FormRequest
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
            'document' => 'required',
            'city' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'description' => 'required',
            'object' => 'required',
            'type' => 'required',
        ];
    }
}
