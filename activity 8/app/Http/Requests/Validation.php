<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Validation extends FormRequest
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
            'name'=> 'required|min:3',
            'email' => 'required',
            'query' => 'required|max:255',
        ];
    }
    public function messages(){

        return [
            'name.required' => "This is also required",
            'email.required' => "Email is required",
            'name.max' => 'not more than 255'
        ];
        

    }
}
