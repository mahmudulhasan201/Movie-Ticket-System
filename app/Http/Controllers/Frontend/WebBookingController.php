<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Movie;
use Illuminate\Http\Request;

class WebBookingController extends Controller
{
    public function bookingForm($id)
    {
        $movies = Movie::find($id);
        return view('frontend.pages.booking', compact('movies'));
    }

    public function bookingStore(Request $request)
    {
        // dd($request->all());
        Booking::create([
            'movie_id' =>$request->movie_id,
            'name' =>$request->name,
            'mobile' =>$request->mobile,
            'date' =>$request->date,
            'show_time' =>$request->show_time,
            'price' =>$request->price,
            'ticket' =>$request->ticket,
        ]);

        notify()->success("Booked Ticket Successfully");
        return redirect()->back();
    }
}
