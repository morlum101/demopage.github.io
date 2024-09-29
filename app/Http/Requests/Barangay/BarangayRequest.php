<?php

namespace App\Http\Requests\Barangay;

use Illuminate\Foundation\Http\FormRequest;

class BarangayRequest extends FormRequest
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
                'name' => ['required', 'unique:barangays,name'],
            ],
            'PUT' => [
                'name' => ['required', \Illuminate\Validation\Rule::unique('barangays')->ignore($this->barangay)],
            ]
        };

    }

    public function messages()
    {
        return [
            'name.unique' => 'The barangay has already been exist',
            'name.required' => 'The barangay field is required',
        ];
    }
}