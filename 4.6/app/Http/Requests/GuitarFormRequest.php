<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuitarFormRequest extends FormRequest
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
            'guitar-name' => 'required',
            'brand' => 'required',
            'year' => ['required', 'integer'],
        ];
    }

    protected function prepareForValidation() {
        $this->merge([
            'guitar-name' => strip_tags($this['guitar-name']),
            'brand' => strip_tags($this->brand),
            'year' => strip_tags($this->year)
        ]);
    }
}
