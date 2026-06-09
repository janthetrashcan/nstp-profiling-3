<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

use App\Models\AcademicTerm;
use App\Models\FacultyTraining;

class Faculty extends Model
{
    /** @use HasFactory<\Database\Factories\FacultyFactory> */
    use HasFactory;

    public function academicTerms(): BelongsToMany
    {
        return $this->belongsToMany(AcademicTerm::class, 'faculty_semester_loads')
                    ->withPivot('assigned_units')
                    ->withTimestamps();
    }

    public function trainings(): BelongsToMany
    {
        return $this->belongsToMany(FacultyTraining::class)
                    ->withTimestamps();
    }
}
