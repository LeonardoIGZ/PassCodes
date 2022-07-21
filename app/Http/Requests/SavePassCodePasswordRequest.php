<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavePassCodePasswordRequest extends FormRequest
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
            'passcode' => 'required|max:5|min:5|regex:/^(?=(?:.*\d){1})(?=(?:.*[A-Z]){1})(?=(?:.*[a-z]){1})\S{5}$/i'
        ];
    }
}