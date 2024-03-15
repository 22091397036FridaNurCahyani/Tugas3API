<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createuserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id_user' => '01',
            'username' => 'required|string|unique:users|min:6',
            'password' => 'required|string|min:8',
            'name' => 'required|string|min:3'

        ];
    }
}
