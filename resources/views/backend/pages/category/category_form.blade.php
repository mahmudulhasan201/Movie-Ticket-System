@extends('backend.master')
@section('content')


<form action="{{route('category.store')}}" method="post">
  @csrf
  <div class="form-group">
    <label for="cat_name">Enter Category Name</label>
    <input name="cat_name" required type="text" class="form-control" id="cat_name" placeholder="Enter Category Name">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>







@endsection