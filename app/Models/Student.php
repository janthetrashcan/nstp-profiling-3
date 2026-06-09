<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\StudentNstpGrade;
use App\Models\StudentAddress;
use App\Models\StudentSection;

use App\Enums\NstpComponent;
use App\Enums\BiologicalSex;
use App\Enums\AddressType;

class Student extends Model
{
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'serial_number',
        'year_graduated',
        'college_program_id',
        'student_section_id',
        'nstp_component',
        'surname',
        'first_name',
        'middle_name',
        'suffix',
        'sex',
        'birthdate',
        'contact_no',
        'email_address',
        'emergency_contact_name',
        'emergency_contact_no',
    ];

    protected $casts = [
        'birthdate' => 'date',
        'nstp_component' => NstpComponent::class,
        'sex' => BiologicalSex::class,
    ];

    public function grade(int $nstpLevel): HasOne
    {
        return $this->hasOne(StudentNstpGrade::class)->where('nstp_level', $nstpLevel);
    }

    public function cityAddress(): HasOne
    {
        return $this->hasOne(StudentAddress::class)->where('type', AddressType::CITY);
    }

    public function provincialAddress(): HasOne
    {
        return $this->hasOne(StudentAddress::class)->where('type', AddressType::PROVINCIAL);
    }

    public function section(): BelongsTo
    {
        return $this->belongsTo(StudentSection::class);
    }
}
