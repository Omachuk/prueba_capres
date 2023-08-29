<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InicioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => 'required',
            'apellido' => 'required',
            'username' => 'required|unique:users,username',
            'username' => 'username:sanitize',
            'email' => 'required|unique:users,email',
            'email' => 'email:sanitize',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
            'rol' => 'required',
        ];
    }
}
