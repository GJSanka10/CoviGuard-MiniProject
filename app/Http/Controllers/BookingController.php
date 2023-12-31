<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function store(Request $request){
        $booking=new Booking;

        $booking->name=$request->name;
        $booking->district=$request->district;
        $booking->division=$request->division;
        $booking->date=$request->date;
        $booking->contact=$request->contact;
        $booking->email=$request->email;

        $booking->save();

    }
}
