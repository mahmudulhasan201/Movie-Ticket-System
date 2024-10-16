@extends('backend.master')
@section('content')


<form action="{{route('category.store')}}" method="post">
@csrf
  <div class="form-group">
    <label for="cat_name">Enter Category Name</label>
    <input name="cat_name" required type="text" class="form-control" id="cat_name" placeholder="Enter Category Name">
  </div>

  <div class="form-group" style="margin-top: 10px;">
    <label for="cat_description">Enter Description</label>
   <textarea class="form-control" name="cat_description" id="cat_description" placeholder="Enter Description"></textarea>
  </div>

  <div class="form-group" style="margin-top: 10px;">
    <label for="cat_status">status</label>
    <select name="status" id="" class="form-control">
      <option value="active">Active</option>
      <option value="inactive">Inactive</option>
    </select>
  </div>



  <button type="submit" class="btn btn-primary">Submit</button>
</form>







@endsection