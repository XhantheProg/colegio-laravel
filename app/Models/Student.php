<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name',
        'nickname',
    ];

    
    public function grades()
    {
        return $this->hasMany(Grade::class);
    }
    public function courses()
    {
        return $this->belongsTo(Course::class, 'course_student');
    }
    
}
