@extends('backend.master')
@section('content')


<form action="{{route('movie.update', $movies->id)}}" method="post" enctype="multipart/form-data">
  @csrf
  @method('put')

  <div class="form-group">
    <label for="">Movie Name</label>
    <input value="{{$movies->movie_name}}" name="movie_name" type="text" class="form-control" id="" placeholder="">
  </div>

  <div class="form-group">
    <label for="cat_name">Category</label>
    <select name="category_id" id="" class="form-control">
      @foreach($categories as $data)
      <option value="{{$data->id}}">{{$data->name}}</option>
      @endforeach
    </select>
  </div>

  <div class="form-group">
    <label for="">Director</label>
    <input value="{{$movies->director}}" name="director" type="text" class="form-control" id="" placeholder="">
  </div>

  <div class="form-group">
    <label for="">Cast</label>
    <input value="{{$movies->cast}}" name="cast" type="text" class="form-control" id="" placeholder="">
  </div>

  <div class="form-group">
    <label for="">Run Time</label>
    <input value="{{$movies->run_time}}" name="run_time" type="text" class="form-control" id="" placeholder="">
  </div>

  <div class="form-group">
    <label for="">Release Date</label>
    <input value="{{$movies->release_date}}" name="release_date" type="text" class="form-control" id="" placeholder="">
  </div>

  <div class="form-group">
    <label for="">Price</label>
    <input value="{{$movies->price}}" name="price" type="text" class="form-control" id="" placeholder="">
  </div>

  <div class="form-group" style="margin-top: 10px;">
    <label for="image">Image</label>
    <img style="width: 100px; height: 100px;" src="{{url('/images/movies', $movies->image)}}" alt="">
    <input name="image" type="file" class="form-control" id="" placeholder="" value="">
  </div>

  <div class="form-group" style="margin-top: 10px;">
    <label for="description">Description</label>
    <input value="{{$movies->description}}" class="form-control" name="description" id="" placeholder="">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection