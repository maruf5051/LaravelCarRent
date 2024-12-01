<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Rental;

class CustomerController extends Controller
{
    //
    function allCustomer()
    {
        $Customers = User::where('role', 'customer')->get();
        return view('admin.Customer.allCustomer', compact('Customers'));
    }
    function history($id)
    {
        $rentals = Rental::where('user_id', $id)->get();
        return view('admin.Customer.history', compact('rentals'));
    }
}
