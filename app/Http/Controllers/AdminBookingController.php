<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class AdminBookingController extends Controller
{
    public function list()
    {
        $bookings = Booking::with('movie')->get();
        return view('backend.bookingList', compact('bookings'));
    }
}
