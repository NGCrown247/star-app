<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRegisterRequest extends FormRequest
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
            'full_name' => ['required', 'string'],
            'email' => 'required|email|unique:users,email',
            'phone_number' => ['required','unique:users','string'],
            'address'=>['required','string'],
            'password' => ['required', 'string', 'min:8'],
            'role' => 'nullable|string|in:user,admin',
        ];
    }
}
