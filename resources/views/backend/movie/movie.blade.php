@extends('backend.master')

@section('content')
<a class="btn btn-primary" href="{{route('movie.form')}}">Create movie</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Movie Name</th>
      <th scope="col">Category</th>
      <th scope="col">Image</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($allMovie as $data)

    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->movie_name}}</td>
      <td>{{$data->category->name}}</td>
      <td><img style="width: 100px; height: 100px;" src="{{url('images/movies', $data->image)}}" alt=""></td>
      <td>{{$data->description}}</td>
      <td>
        <a class="btn btn-info" href="{{route('movie.edit',$data->id)}}">Edit</a>
        <a class="btn btn-danger" href="{{route('movie.delete',$data->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>
@endsection