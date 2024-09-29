<?php

namespace App\Http\Requests\Municipality;

use Illuminate\Foundation\Http\FormRequest;

class MunicipalityRequest extends FormRequest
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

    public function rules()
    {
        return match ($this->method()) {
            'POST' => [
                'name' => ['required', 'unique:municipalities,name'],
            ],
            'PUT' => [
                'name' => ['required', \Illuminate\Validation\Rule::unique('municipalities')->ignore($this->municipality)],
            ]
        };

    }

    public function messages()
    {
        return [
            'name.unique' => 'The municipality has already been exist',
            'name.required' => 'The municipality field is required',
        ];
    }
}