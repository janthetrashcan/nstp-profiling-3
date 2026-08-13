<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentSectionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'academic_term_id' => ['required', 'exists:academic_terms,id'],
            'faculty_id' => ['nullable', 'exists:faculties,id'],
            'nstp_component_id' => ['nullable', 'exists:nstp_components,id'],
            'capacity' => ['nullable', 'integer', 'min:0'],
            'barangay_id' => ['nullable', 'exists:barangays,id'],
        ];
    }
}
