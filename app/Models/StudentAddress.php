<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Student;

use App\Enums\AddressType;

class StudentAddress extends Model
{
    /** @use HasFactory<\Database\Factories\StudentAddressFactory> */
    use HasFactory;

    protected $fillable = [
        'type',
        'house_no',
        'street',
        'barangay',
        'city',
        'province',
    ];

    protected $casts = [
        'type' => AddressType::class,
    ];

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
}
