<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Car;
use App\Models\Rental;

class AdminController extends Controller
{
    //
    function dashboard()
    {
        // Calculate total number of cars
        $totalCars = Car::count();

        // Calculate number of available cars
        $availableCars = Car::where('availability', 1)->count();

        // Calculate total number of rentals
        $totalRentals = Rental::count();

        // Calculate total earnings from rentals
        $totalEarnings = Rental::sum('total_cost');

        // Pass data to the view
        return view('admin.dashboard', compact('totalCars', 'availableCars', 'totalRentals', 'totalEarnings'));
    }
    function admin_login()
    {
        return view('admin.login');
    }
    function admin_logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
