<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Famillyroom extends Model
{
   protected $casts = [
        'category' => 'array',
    ];
}
