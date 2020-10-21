<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostProfileRequest extends FormRequest
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
            'name' => 'required|min:4',
            'gender' => 'required',
            'age' => 'required',
            'religion' => 'required',
            'address' => 'required',
            'school' => 'required',
            'class' => 'required'
        ];
    }
}
