<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedbacks;
use DB;

class FeedbacksController extends Controller
{
    public function feedbacks()
    {
    $feedbacks = DB::table('feedbacks')->join('customers', 'feedbacks.id', 'customers.id')->get();
    return view('feedbacks')
    ->with(['feedbacks' => $feedbacks]);
    }
}
