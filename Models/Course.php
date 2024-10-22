<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    // Define the table associated with the model (optional if the table name is 'courses')
    protected $table = 'courses';

    // Define the fillable attributes (fields that can be mass-assigned)
    protected $fillable = [
        'title',
        'credit_hrs',
    ];

    // Add any relationships if needed (e.g., with students)
}

