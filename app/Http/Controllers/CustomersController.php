<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class CustomersController extends Controller
{
    public function cdetail()
    {
        $a = Customers::all();
        return view('cdetail')->with(['customers'=> $a]);
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
