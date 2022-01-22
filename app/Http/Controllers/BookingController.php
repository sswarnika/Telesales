<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\booking;
use DB;

class bookingController extends Controller
{
    public function booking()
    {
    $booking = DB::table('bookings')->join('customers', 'bookings.id', 'customers.id')->get();
    return view('booking')
    ->with(['booking' => $booking]);
    }
}
