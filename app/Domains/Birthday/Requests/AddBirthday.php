<?php

namespace App\Domains\Birthday\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddBirthday extends FormRequest
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
            'name' => ['required', 'max:255'],
            'date' => ['required', 'max:255'],
            'description' => ['required', 'max:255'],
        ];
    }
}