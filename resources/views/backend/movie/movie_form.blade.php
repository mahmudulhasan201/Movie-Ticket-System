@extends('backend.master')
@section('content')


<form action="{{route('store.movie.form')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="cat_name">Movie Name</label>
    <input name="movie_name" type="text" class="form-control" id="" placeholder="">
  </div>

  <div class="form-group">
    <label for="cat_name">Category</label>
    <select name="category_id" id="" class="form-control">
      <option value="">--select option--</option>
      @foreach($categories as $data)
      <option value="{{$data->id}}">{{$data->name}}</option>
      @endforeach
    </select>
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