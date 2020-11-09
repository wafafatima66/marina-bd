<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trippleroom extends Model
{
    protected $casts = [
        'category' => 'array',
    ];
}
