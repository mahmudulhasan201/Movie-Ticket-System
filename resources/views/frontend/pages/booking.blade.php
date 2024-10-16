@extends('frontend.master')
@section('content')

<h1 class="text-center">Booking Form</h1>
<div class="d-flex justify-content-center align-items-center" style="background-color: black; height: 100vh; padding-left:300px">
    <form action="{{route('frontend.booking.store', $movies->id)}}" class="bg-light p-4" style="width: 400px; border-radius: 10px;" method="post">
        @csrf
            <input type="hidden" name="movie_id" value="{{$movies->id}}">
        <div class="form-group">
            <label for="" style="color: white;">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="" style="color: white;">Mobile</label>
            <input type="tel" name="mobile" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="" style="color: white;">Date</label>
            <input type="date" name="date" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="" style="color: white;">Show Time</label>
            <input type="time" name="show_time" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="" style="color: white;">Number of Tickets</label>
            <input type="number" name="ticket" class="form-control">
        </div>
        
        <button type="submit" class="btn btn-primary">Book Now</button>
    </form>
</div>

@endsection
