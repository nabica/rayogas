<?php

namespace App\Http\Requests\Admin\Home;

use Illuminate\Foundation\Http\FormRequest;

class HomeRateRequest extends FormRequest
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
                    'button_text' => 'required',
                ];
                break;

            case 'PUT':
            case 'PATCH':
                return [
                    'button_text' => 'required',
                ];
                break;
        }
    }

    public function messages()
    {
        return [
            'button_text.required' => 'El campo texto botón es obligatorio.',
        ];
    }
}
