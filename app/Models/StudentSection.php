<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Models\Student;

class StudentSection extends Model
{
    protected $fillable = [
        'name',
        'capacity',
        'barangay_assigned',
        'faculty_id',
        'academic_term_id',
    ];

    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }
}
