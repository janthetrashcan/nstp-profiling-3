<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentNstpGradeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'student_enrollment_id' => ['required', 'exists:student_enrollments,id'],
            'grade' => ['nullable', 'numeric', 'between:0,100'],
            'status' => ['nullable', 'string', 'max:50'],
        ];
    }
}
