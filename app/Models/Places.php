<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Places extends Model
{
    protected $table = 'places';
    protected $fillable = [
        'name', 'latitude', 'longitude'
    ];
}
