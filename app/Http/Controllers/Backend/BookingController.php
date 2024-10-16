<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function list()
    {
        $bookings = Booking::with('movie')->get();
        return view('backend.pages.booking.bookingList', compact('bookings'));
    }
}
