<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\StudentSection;

class Barangay extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name'
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function studentSections()
    {
        return $this->hasMany(StudentSection::class);
    }
}
