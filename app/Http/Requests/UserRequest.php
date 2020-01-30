<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
    public function rules(Request $request)
    {
        return [
            'fname' => 'required',
            'lname' => 'required',
            'age' => 'required',
            'cnic' => Rule::requiredIf(($request->age) >= 18),
            'email' => 'required',
            'password' => 'required',
        ];
    }
}
