<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class RegisterRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'  => 'required|string|max:150',
            'gender' => 'required|in:m,f,n',
            'birthdate' => 'required|date',
            'cpf' => 'required|string|size:11',
            'phone' => 'required|string|size:11',
            'email' => 'required|email|max:150|unique:users',
            'subscribe' => 'required|boolean',
            'password' => 'required|max:20',
            'shareData' => 'required|boolean',

        ];
    }

    public function getData()
    {
        $data = $this->validated();
        $data['password'] = Hash::make($data['password']);
        return $data;
    }
}
