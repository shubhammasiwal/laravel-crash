<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $fillable = [
        'notes',
        'bird_count',
    ];

    // public function getNameAttribute($value)
    // {
    //     return ucfirst($value);
    // }

    // public function setNameAttribute($value)
    // {
    //     $this->attributes['name'] = strtolower($value);
    // }
}
