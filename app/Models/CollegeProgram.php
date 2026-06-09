<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Models\Student;

class CollegeProgram extends Model
{
    protected $fillable = [
        'code',
        'title',
    ];

    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }
}
