<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Singleroom extends Model
{
    protected $casts = [
        'category' => 'array',
    ];
}
