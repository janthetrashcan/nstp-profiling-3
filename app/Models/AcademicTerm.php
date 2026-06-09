<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Enums\Semester;

class AcademicTerm extends Model
{
    protected $fillable = [
        'academic_year',
        'semester',
        'is_current',
        'is_grading_open'
    ];

    protected $casts = [
        'semester' => Semester::class,
    ];
}
