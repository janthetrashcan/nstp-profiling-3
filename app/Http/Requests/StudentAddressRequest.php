<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentAddressRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'student_id' => ['required', 'exists:students,id'],
            'type' => ['nullable', 'string', 'max:50'],
            'house_no' => ['nullable','string', 'max:255'],
            'street' => ['nullable','string', 'max:255'],
            'barangay' => ['required','string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'province' => ['required', 'string', 'max:255'],
        ];
    }
}
