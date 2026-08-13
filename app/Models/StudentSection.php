<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barangay;

class StudentSection extends Model
{
    use HasFactory;

    protected $fillable = ['academic_term_id', 'faculty_id', 'nstp_component_id', 'capacity', 'barangay_assigned'];

    public function academicTerm()
    {
        return $this->belongsTo(AcademicTerm::class);
    }

    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }

    public function component()
    {
        return $this->belongsTo(NstpComponent::class, 'nstp_component_id');
    }

    public function barangay()
    {
        return $this->belongsTo(Barangay::class);
    }

    public function enrollments()
    {
        return $this->hasMany(StudentEnrollment::class);
    }
}
