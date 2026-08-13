<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Faculty extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id', 'employee_id', 'surname', 'first_name', 'middle_name', 'sex', 'birthdate', 'employment_status'
    ];

    protected $dates = ['birthdate', 'deleted_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function studentSections()
    {
        return $this->hasMany(StudentSection::class);
    }

    public function facultySemesterLoads()
    {
        return $this->hasMany(FacultySemesterLoad::class);
    }

    public function trainings()
    {
        return $this->belongsToMany(Training::class, 'faculty_training');
    }
}
