<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class double extends Model
{
    protected $fillable = [
    'a_date', 'l_date', 'name', 'email', 'phone','gender','total_room','total_member','address'
  ];
}
