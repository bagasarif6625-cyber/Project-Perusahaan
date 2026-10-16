<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['title', 'icon', 'description', 'features', 'sort'];

    protected $casts = [
        'features' => 'array',
    ];
}
