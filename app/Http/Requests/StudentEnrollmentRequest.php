<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentEnrollmentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'student_id' => ['required', 'exists:students,id'],
            'student_section_id' => ['required', 'exists:student_sections,id'],
            'academic_term_id' => ['required', 'exists:academic_terms,id'],
            'nstp_level' => ['nullable', 'integer', 'min:1'],
        ];
    }
}
