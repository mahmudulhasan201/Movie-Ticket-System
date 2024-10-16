@extends('backend.master')

@section('content')
<a class="btn btn-primary" href="{{route('category.form')}}">Create Category</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Category Name</th>
      <th scope="col">Description</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
        <tbody>
        @foreach ($allCategory as $cat)
 
 <tr>
       <th scope="row">{{$cat->id}}</th>
       <td>{{$cat->name}}</td>
       <td>{{$cat->description}}</td>
       <td>{{$cat->status}}</td>
       <td>
         <a class="btn btn-info" href="{{route('edit.category', $cat->id)}}">Edit</a>
         <a class="btn btn-danger" href="{{route('delete.category', $cat->id)}}">Delete</a>
       </td>
     </tr>
 
 @endforeach
        </tbody>
    </table>
    @endsection