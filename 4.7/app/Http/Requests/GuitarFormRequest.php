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
            'name' => 'required',
            'brand' => 'required',
            'year_made' => ['required', 'integer'],
        ];
    }

    protected function prepareForValidation() {
        $this->merge([
            'name' => strip_tags($this->name),
            'brand' => strip_tags($this->brand),
            'year_made' => strip_tags($this->year_made)
        ]);
    }
}
