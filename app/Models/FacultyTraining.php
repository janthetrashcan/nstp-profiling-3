<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FacultyTraining extends Model
{
    use HasFactory;

    protected $table = 'faculty_training';

    protected $fillable = ['faculty_id', 'training_id'];
}
