<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class MovieController extends Controller
{
  public function movie()
  {
    $allMovie = Movie::with('category')->get();
    return view('backend.movie.movie', compact('allMovie'));
  }

  public function movie_form()
  {
    $categories = Category::all();
    return view('backend.movie.movie_form', compact('categories'));
  }

  public function storeMovie_form(Request $request)
  {
    $validation = Validator::make(
      $request->all(),
      [
        'movie_name' => 'required',
        'category_id' => 'required',
        // 'image' => 'required',
        'description' => 'required',
      ]
    );


    if ($validation->fails()) {
      notify()->error($validation->getMessageBag());
      return redirect()->back();
    }

    $movie_image = '';
    if ($request->hasFile('image')) {
      $movie_image = date('YmdHis') . '.' . $request->file('image')->getClientOriginalExtension();
      $request->file('image')->storeAs('/movies', $movie_image);
    }

    Movie::create([
      'movie_name' => $request->movie_name,
      'category_id' => $request->category_id,
      'image' => $movie_image,
      'description' => $request->description
    ]);

    return redirect()->route('movie.list');
  }

  //Edit
  public function editMovie($id)
  {

    $categories = Category::all();
    $movies = Movie::find($id);
    return view('backend.movie.editMovie', compact('categories','movies'));
  }

  //update
  public function updateMovie(Request $request, $id)
  {
    $movies = Movie::find($id);

    $movie_image = '';
    if ($request->hasFile('image')) {
      $movie_image = date('YmdHis') . '.' . $request->file('image')->getClientOriginalExtension();
      $request->file('image')->storeAs('/movies', $movie_image);
      File::delete('images/movies/' . $movies->image);
    }

    $validation = Validator::make(
      $request->all(),
      [
        'movie_name' => 'required',
        'category_id' => 'required',
        // 'image' => 'required',
        'description' => 'required',
      ]
    );


    if ($validation->fails()) {
      notify()->error($validation->getMessageBag());
      return redirect()->back();
    }


    $movies->update([
      'movie_name' => $request->movie_name,
      'category_id' => $request->category_id,
      'image' => $movie_image,
      'description' => $request->description
    ]);

    return redirect()->route('movie.list');
  }

  //delete
public function deleteMovie($id){
  $delete = Movie::find($id);
  $delete->delete();
  notify()->success('Movie Deleted');
  return redirect()->back();
}
}
