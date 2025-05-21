<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
                'email' => ['required', 'email'],
                'phone_number' => ['required', 'string'],
                'address' => ['required', 'string'],
                'password' => ['sometimes','string', 'min:8'],
                'new_password' => ['sometimes', 'string', 'min:8'],
                'confirm_password' => ['sometimes', 'string', 'min:8','same:new_password'],
                'image'=>['sometimes']


        ];
      }
}
