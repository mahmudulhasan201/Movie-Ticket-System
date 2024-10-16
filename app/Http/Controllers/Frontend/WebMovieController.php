<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class WebMovieController extends Controller
{
    public function details($id)
    {
        $movies = Movie::find($id);
        //dd($movies);
        return view('frontend.pages.movieDetails',compact('movies'));
    }
}
