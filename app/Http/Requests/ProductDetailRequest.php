<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductDetailRequest extends FormRequest
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
            'quantily'=>'required',
            'number'=>'required',
            'visit_number'=>'required',
            'address'=>'required',
            'contentt'=>'required',
            'description'=>'required',
            //'detail'=>'required'
        ];
    }

    public function messages()
    {
        return [

            'quantily.required'=>'please enter quantity',
            'number.required'=>'please enter number',
            'visit_number.required'=>'please enter visit_number',
            'address.required'=>'please enter address',
            'contentt.required'=>'please enter contentt',
            'description.required'=>'please enter description',
            //'detail.required'=>'please enter detail'
        ];
    }
}
