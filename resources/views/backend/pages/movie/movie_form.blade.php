@extends('backend.master')
@section('content')


<form action="{{route('store.movie.form')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="">Movie Name</label>
    <input name="movie_name" type="text" class="form-control" id="" placeholder="">
  </div>

  <div class="form-group">
    <label for="">Category</label>
    <select name="category_id" id="" class="form-control">
      <option value="">--select option--</option>
      @foreach($categories as $data)
      <option value="{{$data->id}}">{{$data->name}}</option>
      @endforeach
    </select>
  </div>

  <div class="form-group">
    <label for="">Director</label>
    <input name="director" type="text" class="form-control" id="" placeholder="">
  </div>

  <div class="form-group">
    <label for="">Cast</label>
    <input name="cast" type="text" class="form-control" id="" placeholder="">
  </div>

  <div class="form-group">
    <label for="">Run Time</label>
    <input name="run_time" type="text" class="form-control" id="" placeholder="">
  </div>

  <div class="form-group">
    <label for="">Release Date</label>
    <input name="release_date" type="date" class="form-control" id="" placeholder="">
  </div>

  <div class="form-group">
    <label for="">Price</label>
    <input name="price" type="text" class="form-control" id="" placeholder="">
  </div>

  <div class="form-group" style="margin-top: 10px;">
    <label for="image">Image</label>
    <input name="image" type="file" class="form-control" id="" placeholder="">
  </div>

  <div class="form-group" style="margin-top: 10px;">
    <label for="description">Description</label>
    <input class="form-control" name="description" id="" placeholder="">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection