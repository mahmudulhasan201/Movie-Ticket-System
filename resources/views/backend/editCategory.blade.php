@extends('backend.master')
@section('content')


<form action="{{route('update.category', $categories->id)}}" method="post">
@csrf
@method('put')

  <div class="form-group">
    <label for="cat_name">Enter Category Name</label>
    <input value="{{$categories->name}}" name="cat_name" required type="text" class="form-control" id="cat_name" placeholder="Enter Category Name">
  </div>

  <div class="form-group" style="margin-top: 10px;">
    <label for="cat_description">Enter Description</label>
   <input  value="{{$categories->description}}" class="form-control" name="cat_description" id="cat_description" placeholder="Enter Description">
  </div>

  <div class="form-group" style="margin-top: 10px;">
    <label for="cat_status">status</label>
    <select name="status" id="" class="form-control">
    <option value="{{$categories->status}}">{{$categories->status }}</option>
      <option value="active">Active</option>
      <option value="inactive">Inactive</option>
    </select>
  </div>



  <button type="submit" class="btn btn-primary">Submit</button>
</form>







@endsection