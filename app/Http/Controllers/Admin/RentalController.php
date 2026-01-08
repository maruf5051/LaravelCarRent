<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Rental;

class RentalController extends Controller
{
    //

    function allRental()
    {

        $rentals = Rental::all();

        return view('admin.Rental.AllRental', compact('rentals'));
    }

    public function destroy($id)
    {
        $rental = Rental::findOrFail($id);
        $rental->delete();

        return redirect()->back()->with('success', 'Rental deleted successfully.');
    }

}
