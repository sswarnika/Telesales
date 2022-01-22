<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OffersProvided;
use DB; 

class OffersController extends Controller
{
    public function offers()
    {
    $offers = DB::table('offerProvided')->join('customers', 'offerProvided.id', 'customers.id')->get();
    return view('suitableoffers')
    ->with(['offers' => $offers]);
    }
}
