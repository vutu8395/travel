<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CateRequest extends FormRequest
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
            'txtName'=>'required|unique:cates,name',
        ];
    }
    public function messages()
    {
        return [
            'txtName.required'=>'please enter name you want enter',
            'txtName.unique'=>'please choose name do not same'
        ];
    }
}
