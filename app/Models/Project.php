<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title', 'category', 'client', 'year', 'description', 'color_from', 'color_to',
    ];
}
