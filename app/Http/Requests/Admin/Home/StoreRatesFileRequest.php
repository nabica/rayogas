<?php

namespace App\Http\Requests\Admin\Home;

use Illuminate\Foundation\Http\FormRequest;

class StoreRatesFileRequest extends FormRequest
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
                    'description' => 'required',
                    'zone_id' => 'required|exists:zones,id',
                    'month' => 'required|string',
                    'file_name' => 'required|file|mimes:pdf,doc,docx|max:2048',
                ];
                break;

            case 'PUT':
            case 'PATCH':
                return [
                    'description' => 'required',
                    'zone_id' => 'required|exists:zones,id',
                    'month' => 'required|string',
                    'file_name' => 'required|file|mimes:pdf,doc,docx|max:2048',
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

    public function attributes()
    {
        return [
            'description' => 'descripción',
            'zone_id' => 'zona',
            'month' => 'mes',
            'file_name' => 'archivo',
        ];
    }
}
