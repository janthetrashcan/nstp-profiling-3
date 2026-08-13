<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicTerm extends Model
{
    use HasFactory;

    protected $fillable = ['academic_year', 'semester', 'is_current', 'is_grading_open'];

    protected $casts = [
        'is_current' => 'boolean',
        'is_grading_open' => 'boolean',
    ];

    public function studentEnrollments()
    {
        return $this->hasMany(StudentEnrollment::class);
    }

    public function studentSections()
    {
        return $this->hasMany(StudentSection::class);
    }

    public function facultySemesterLoads()
    {
        return $this->hasMany(FacultySemesterLoad::class);
    }
}
