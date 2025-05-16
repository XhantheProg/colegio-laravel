<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = [
        'student_id',
        'course_id',
        'partial_id',
        'grade',
    ];
    
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public function courseuserassignments()
    {
        return $this->hasMany(CourseUserAssignment::class);
    }
    public function partial()
    {
        return $this->belongsTo(Partial::class);
    }
    
}
