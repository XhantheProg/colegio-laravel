<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gestion extends Model
{
    protected $fillable = [
        'name',
        'start_date',
        'end_date',
    ];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    
    public function partials()
    {
        return $this->hasMany(Partial::class);
    }
    

    

}
