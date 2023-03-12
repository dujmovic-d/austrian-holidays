<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Holiday extends Model
{
    use HasFactory;
    // Allow Mass Filling of Holidays in Database
    protected $fillable = ['name','date'];
    // Cast Date from JSON into Array when retrieving from Database
    // Also cast from Array back into JSON String when saving into Database
    protected $casts = [
        'date'=>'array',
    ];
    public $timestamps = false;
}
