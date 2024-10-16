<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Movie;
use Illuminate\Http\Request;

class WebCategoryController extends Controller
{
    public function categoryMovie($id)
    {
        $category = Category::find($id);
        $movies = Movie::where('category_id', $id)->get();
        return view('frontend.pages.categoryMovie', compact('movies', 'category'));
    }

    public function allMovie()
    {
        $movies = Movie::all();
        return view('frontend.pages.allMovies', compact('movies'));
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }
}
