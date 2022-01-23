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
        $request->validate([
            'cname'=> 'required',
            'contact'=> 'required',
            'address'=> 'required',
            'pkgname'=> 'required',
            'desp'=> 'required'
        ]);

        $cedit = new Customer();
        
        $cedit->cname = $request->cname;
        $cedit->contact = $request->contact;
        $cedit->address = $request->address;
        $cedit->package = $request->pkgname;
        $cedit->status = $request->desp;

        $cedit->save();

        return redirect('/customerdetails')->with('success','Data Saved');

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
        $this->validate($request, [
            'cname'=> required,
            'contact'=> required,
            'address'=> required,
            'pkgname'=> required,
            'desp'=> required,
        ]);

        $cedit = Customer::find($id);
        
        $cedit->cname = $request->input('cname');
        $cedit->contact = $request->input('contact');
        $cedit->address = $request->input('address');
        $cedit->pkgname = $request->input('pkgname');
        $cedit->desp = $request->input('desp');

        $cedit->save();

        return redirect('/customerdetails')->with('success','Data Updated');
    }

    public function destroy($id)
    {
        //
    }
}
