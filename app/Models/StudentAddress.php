<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAddress extends Model
{
    use HasFactory;

    protected $fillable = ['student_id', 'type', 'house_no', 'street', 'barangay', 'city', 'province'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
