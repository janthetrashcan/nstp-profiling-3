<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacultySemesterLoad extends Model
{
    use HasFactory;

    protected $fillable = ['faculty_id', 'academic_term_id', 'assigned_units'];

    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }

    public function term()
    {
        return $this->belongsTo(AcademicTerm::class, 'academic_term_id');
    }
}
