<?php

namespace App\Http\Controllers;

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
