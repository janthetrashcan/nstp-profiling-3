<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id_number' => ['nullable', 'string', 'max:50'],
            'serial_number' => ['nullable', 'string', 'max:50'],
            'college_program_id' => ['nullable', 'exists:college_programs,id'],
            'nstp_component_id' => ['nullable', 'exists:nstp_components,id'],
            'year_graduated' => ['nullable', 'integer'],
            'surname' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['nullable', 'string', 'max:255'],
            'sex' => ['nullable', 'in:male,female'],
            'birthdate' => ['nullable', 'date'],
            'contact_no' => ['nullable', 'string', 'max:50'],
            'emergency_contact_name' => ['nullable', 'string', 'max:255'],
            'emergency_contact_no' => ['nullable', 'string', 'max:255'],
        ];
    }
}
