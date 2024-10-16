<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class WebHomeController extends Controller
{
    public function home(){

        $movies=Movie::all();
        return view('frontend.pages.homePage',compact('movies'));
    }
}
