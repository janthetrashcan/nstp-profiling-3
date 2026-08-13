<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentEnrollment extends Model
{
    use HasFactory;

    protected $fillable = ['student_id', 'student_section_id', 'academic_term_id', 'nstp_level'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function section()
    {
        return $this->belongsTo(StudentSection::class, 'student_section_id');
    }

    public function term()
    {
        return $this->belongsTo(AcademicTerm::class, 'academic_term_id');
    }

    public function nstpGrade()
    {
        return $this->hasOne(StudentNstpGrade::class);
    }

    public function activityLogs()
    {
        return $this->hasMany(StudentActivityLog::class);
    }
}
