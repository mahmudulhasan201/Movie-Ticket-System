@extends('backend.master')
@section('content')


<form action="{{route('movie.update', $movies->id)}}" method="post" enctype="multipart/form-data">
  @csrf
  @method('put')

  <div class="form-group">
    <label for="cat_name">Movie Name</label>
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

  <div class="form-group" style="margin-top: 10px;">
    <label for="image">Image</label>
    <img style="width: 100px; height: 100px;" src="{{url('images/movies', $movies->image)}}" alt="">
    <input name="image" type="file" class="form-control" id="" placeholder="">
  </div>

  <div class="form-group" style="margin-top: 10px;">
    <label for="description">Description</label>
    <input value="{{$movies->description}}" class="form-control" name="description" id="" placeholder="">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection