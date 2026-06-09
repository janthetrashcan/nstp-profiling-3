<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class FacultySemesterLoad extends Pivot
{
    protected $fillable = [
        'faculty_id',
        'academic_term_id',
        'assigned_units',
    ];
}
