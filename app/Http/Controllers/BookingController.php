<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Movie;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function bookingForm($id)
    {
        $movies = Movie::find($id);
        return view('frontend.pages.booking', compact('movies'));
    }

    public function bookingStore(Request $request)
    {
        //dd($request->all());
        Booking::create([
            'movie_id' =>$request->movie_id,
            'name' =>$request->name,
            'mobile' =>$request->mobile,
            'date' =>$request->date,
            'show_time' =>$request->show_time,
            'ticket' =>$request->ticket,
        ]);

        notify()->success("Booked Ticket Successfully");
        return redirect()->back();
    }
}
