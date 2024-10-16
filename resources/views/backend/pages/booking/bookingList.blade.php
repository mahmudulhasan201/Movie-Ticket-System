@extends('backend.master')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Movie Name</th>
      <th scope="col">Mobile</th>
      <th scope="col">Date</th>
      <th scope="col">Show Time</th>
      <th scope="col">Price</th>
      <th scope="col">Ticket</th>
      

    </tr>
  </thead>
        <tbody>
        @foreach ($bookings as $data)
 
 <tr>
       <th scope="row">{{$data->id}}</th>
       <td>{{$data->name}}</td>
       <td>{{$data->movie->movie_name}}</td>
       <td>{{$data->mobile}}</td>
       <td>{{$data->date}}</td>
       <td>{{$data->show_time}}</td>
       <td>{{$data->price}}</td>
       <td>{{$data->ticket}}</td>
       
     </tr>
 
 @endforeach
        </tbody>
    </table>
    @endsection