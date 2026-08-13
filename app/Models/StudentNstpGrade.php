<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentNstpGrade extends Model
{
    use HasFactory;

    protected $fillable = ['student_enrollment_id', 'grade', 'status'];

    public function enrollment()
    {
        return $this->belongsTo(StudentEnrollment::class, 'student_enrollment_id');
    }
}
