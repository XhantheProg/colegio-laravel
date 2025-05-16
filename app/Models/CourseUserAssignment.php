<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseUserAssignment extends Model
{
    protected $fillable = [
        'course_id',
        'user_id',
        'role',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function assignment()
    {
        return $this->hasMany(Assignment::class);
    }

}
