<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

    protected $fillable = ['seminar_name', 'date', 'venue'];

    protected $dates = ['date'];

    public function faculties()
    {
        return $this->belongsToMany(Faculty::class, 'faculty_training');
    }
}
