<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebScheduleController extends Controller
{
   public function schedule(){
    return view('frontend.pages.schedule');
   }
}
