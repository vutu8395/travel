<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name'=>'required|unique:contacts,name',
            'phone'=>'required',
            'address'=>'required',
            'sex'=>'required',
            'email'=>'required'
        ];
    }

    public function messages()
    {
        return[

            'name.required' => 'please enter username',
            'name.unique'=>'please choose not same username',
            'phone.required'=>'please enter phone',
            'address.required'=>'please enter address',
            'sex.same'=>'please not enter sex',
            'email'=>'please enter email'
        ];
    }
}
