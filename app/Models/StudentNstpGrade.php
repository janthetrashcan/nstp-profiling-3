<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Enums\Semester;
use App\Enums\CourseStatus;
use App\Models\Student;

class StudentNstpGrade extends Model
{
    /** @use HasFactory<\Database\Factories\StudentNstpGradeFactory> */
    use HasFactory;

    protected $fillable = [
        'nstp_level',
        'academic_term_id',
        'grade',
        'status',
    ];

    protected $casts = [
        'status' => CourseStatus::class,
    ];

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
}
