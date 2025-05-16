<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name',
        'start_date',
        'end_date',
    ];

    

    public function students()
    {
        return $this->hasMany(Student::class, 'course_student');
    }
    public function gestion()
    {
        return $this->belongsTo(Gestion::class);
    }   
    
    public function users()
    {
        return $this->belongsToMany(User::class, 'course_user_assignments')
            ->withTimestamps();
    }

    
}
