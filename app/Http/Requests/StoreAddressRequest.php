<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAddressRequest extends FormRequest
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
            'user_id' => 'required',
            'recipient' => 'required|string|max:255',
            'cep' => 'required|string|min:8|max:9',
            'address' => 'required|string|max:255',
            'number' => 'required|string',
            'neighborhood' => 'required|string|max:255',
            'complement' => 'nullable|string|max:255',
            'reference' => 'nullable|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255'
        ];
    }
}
