<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentsRequest extends FormRequest
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
            'name'=>"required",
            'email'=>'required',
            'age'=>'required',
            'gender'=>'required',
            'grates_id'=>"required"
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'age.required'  =>"Age is required",
            'gender.required'=>"Gender is required",
            "grates_id.required"=>"Class is required",

        ];
    }
}
