<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany; // Added this correct import

class Student extends Model
{
    use HasFactory;

    /**
     * The courses that belong to the student.
     * This defines the Many-to-Many relationship using the course_student pivot table.
     */
    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class);
    }
}
