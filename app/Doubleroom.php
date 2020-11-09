<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doubleroom extends Model
{
    protected $casts = [
        'category' => 'array',
    ];
}
