<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id_number', 'serial_number', 'college_program_id', 'nstp_component_id', 'year_graduated',
        'surname', 'first_name', 'middle_name', 'sex', 'birthdate', 'contact_no', 'emergency_contact_name', 'emergency_contact_no'
    ];

    protected $dates = ['birthdate', 'deleted_at'];

    public function program()
    {
        return $this->belongsTo(CollegeProgram::class, 'college_program_id');
    }

    public function component()
    {
        return $this->belongsTo(NstpComponent::class, 'nstp_component_id');
    }

    public function addresses()
    {
        return $this->hasMany(StudentAddress::class);
    }

    public function enrollments()
    {
        return $this->hasMany(StudentEnrollment::class);
    }
}
