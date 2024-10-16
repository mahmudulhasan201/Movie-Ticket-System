@extends('frontend.master')
@section('content')

<h1 class="text-center">Booking Form</h1>
<div class="d-flex justify-content-center align-items-center" style="background-color: black; height: 100vh; padding-left:300px">
    <form action="{{route('frontend.booking.store', $movies->id)}}" class="bg-light p-4" style="width: 400px; border-radius: 10px;" method="post">
        @csrf

        <input type="hidden" name="movie_id" value="{{$movies->id}}">
        <input type="hidden" id="base_price" value="{{$movies->price}}">

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
            <select name="show_time" class="form-control">
                <option value="">--select option--</option>
                <option value="10am">10 AM</option>
                <option value="1pm">1 PM</option>
                <option value="3pm">3 PM</option>
                <option value="6pm">6 PM</option>
                <option value="9pm">9 PM</option>
            </select>
        </div>

        <div class="form-group">
            <label for="" style="color: white;">Number of Tickets</label>
            <input type="number" id="ticket_quantity" name="ticket" class="form-control" value="1" min="1">
        </div>

        <div class="form-group">
            <label for="" style="color: white;">Seat Type</label>
            <select name="seat" id="seat_type" class="form-control">
                <option value="">--select option--</option>
                <option value="normal">Normal</option>
                <option value="vip">VIP</option>
            </select>
        </div>

        <div class="form-group">
            <label for="" style="color: white;">Price</label>
            <input type="number" id="price" name="price" class="form-control" value="{{$movies->price}}" readonly>
        </div>

        <button type="submit" class="btn btn-primary">Book Now</button>
    </form>
</div>

<script>
    // Function to calculate and update the price
    function updatePrice() {
        var basePrice = parseFloat(document.getElementById('base_price').value);
        var selectedSeat = document.getElementById('seat_type').value;
        var ticketQuantity = parseInt(document.getElementById('ticket_quantity').value) || 1;
        var updatedPrice = basePrice;

        // Add 200 TK for VIP seat
        if (selectedSeat === 'vip') {
            updatedPrice += 200;
        }

        // Update the price based on the number of tickets
        updatedPrice *= ticketQuantity;

        // Set the updated price
        document.getElementById('price').value = updatedPrice;
    }

    // Event listeners for seat type change and ticket quantity change
    document.getElementById('seat_type').addEventListener('change', updatePrice);
    document.getElementById('ticket_quantity').addEventListener('input', updatePrice);
</script>

@endsection
