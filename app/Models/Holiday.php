<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Holiday extends Model
{
    use HasFactory;
    // Allow Mass Filling of Holidays in Database
    protected $fillable = ['name','date'];
    // Cast Date into DateTime Object when retrieving from Database
    // Also cast from DateTIme Object back into Date when saving into Database
    protected $casts = [
        'date'=>'datetime:Y-m-d',
    ];
    public $timestamps = false;
}
