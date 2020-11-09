<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestaurentController extends Controller
{
     public function restaurent() {
        return view('restaurent.restaurent');
      }
}
