<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
use DB;
use App\Models\Device;
use App\Models\Payments;

class CustomersController extends Controller
{
    public function cdetail()
    {
        // $a = Customers::all();
    $cdetail = DB::table('customers')->join('packages', 'packages.id', 'customers.id')->join('statuses', 'statuses.id', 'customers.id')->join('payments', 'payments.id', 'customers.id')->get();
    $device = Device::all();
    $payments = DB::table('payments')->get();
    return view('customerdetails')
    ->with(['cdetail' => $cdetail, 'device' => $device, 'payments' => $payments]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
