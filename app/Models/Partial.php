<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partial extends Model
{
    protected $fillable = [
        'name',
        'start_date',
        'end_date',
    ];

    public function grades()
    {
        return $this->hasMany(Grade::class);
    }
    public function gestion()
    {
        return $this->belongsTo(Gestion::class);
    }
}
