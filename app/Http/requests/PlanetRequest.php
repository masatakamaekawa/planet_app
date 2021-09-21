<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlanetRequest extends FormRequest
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
            'name_ja' => 'required|string|max:100',
            'name_en' => 'required|string|max:100',
            'radius' => 'required|integer|min:1',
            'weight' => 'required|integer|min:1'
        ];
    }
}