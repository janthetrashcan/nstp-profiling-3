<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentActivityLog extends Model
{
    use HasFactory;

    protected $fillable = ['student_enrollment_id', 'activity_name', 'date', 'hours_rendered'];

    protected $dates = ['date'];

    public function enrollment()
    {
        return $this->belongsTo(StudentEnrollment::class, 'student_enrollment_id');
    }
}
