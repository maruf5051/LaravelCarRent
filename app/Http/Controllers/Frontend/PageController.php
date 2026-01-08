<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Rental;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Mail\RentalConfirmation;
use App\Mail\AdminConfirmation;
use Illuminate\Support\Facades\Mail;


class PageController extends Controller
{
    //
    function index()
    {
        return view('frontend.index');
    }
    function signIn()
    {
        return view('frontend.signIn');
    }
    function about()
    {
        return view('frontend.about');
    }
    function signUp()
    {
        return view('frontend.signUp');
    }
    function contact()
    {
        return view('frontend.contact');
    }
    function rental()
    {
        $cars = Car::orderBy('daily_rent_price', 'asc')->get();
        return view('frontend.rental', compact('cars'));
    }



    function SeeDetails($id)
    {

        $car = Car::findOrFail($id);

        // Fetch unavailable dates (rented periods)
        $unavailableRentals = Rental::where('car_id', $id)->get();
        $unavailableDates = [];

        foreach ($unavailableRentals as $rental) {
            $startDate = Carbon::parse($rental->start_date);
            $endDate = Carbon::parse($rental->end_date);

            while ($startDate->lte($endDate)) {
                $unavailableDates[] = $startDate->toDateString();
                $startDate->addDay();
            }
        }


        return view('frontend.SeeDetails', compact('car', 'unavailableDates'));
    }


    function bookCar(Request $request)
    {
        $request->validate([

            'start_date' => 'required|date|after_or_equal:today',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);
        if (!Auth::check()) {
            return redirect()->route('signIn');
        }

        // find this car info using car_id
        $car = Car::findOrFail($request->car_id);

        // Check if the car is already rented within the selected period
        $startDate = Carbon::parse($request->start_date);
        $endDate = Carbon::parse($request->end_date);

        $existingRental = Rental::where('car_id', $car->id)
            ->where(function ($query) use ($startDate, $endDate) {
                $query->whereBetween('start_date', [$startDate, $endDate])
                    ->orWhereBetween('end_date', [$startDate, $endDate]);
            })->exists();

        $notify = array(
            'message' => 'This Car is Already Rented In This Date',
            'alert-type' => 'error',
        );

        if ($existingRental) {
            return redirect()->back()->with($notify);
        }

        // Calculate the total cost
        $days = ($startDate->diffInDays($endDate)) + 1;


        // +1 to include both start and end date
        $totalCost = $days * $car->daily_rent_price;


        // Store the rental information
        $rental = Rental::create([
            'user_id' => Auth::id(),
            'car_id' => $car->id,
            'start_date' => $startDate,
            'end_date' => $endDate,
            'total_cost' => $totalCost,
        ]);

        $email = Auth::user()->email;
        // Send email to the customer
        Mail::to($email)->send(new RentalConfirmation($rental));

        // Send email to the admin
        $adminEmail = 'sikder15-5051@diu.edu.bd'; // Replace with the actual admin email
        Mail::to($adminEmail)->send(new AdminConfirmation($rental));

        $notish = array(
            'alert-type' => 'success',
            'message' => 'Congratulation,You rent a Car',

        );

        return back()->with($notish);
    }

    function user_logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('index');
    }


    public function currentBookings()
    {
        $user = Auth::user();
        $today = Carbon::today();

        // Retrieve bookings where the end_date is in the future or today
        $currentBookings = Rental::where('user_id', $user->id)
            ->where('end_date', '>=', $today)
            ->get();

        return view('frontend.currentBooking', compact('currentBookings'));
    }
    function deleteBooking($id)
    {

        $booking = Rental::findOrFail($id);
        $today = Carbon::today();

        // Ensure the booking's start date is in the future before deleting
        if (Carbon::parse($booking->start_date)->isFuture()) {
            $booking->delete();
            return redirect()->back();
        }
    }

    public function pastBookings()
    {
        $user = Auth::user();
        $today = Carbon::today();

        // Retrieve bookings where the end_date has passed
        $pastBookings = Rental::where('user_id', $user->id)
            ->where('end_date', '<', $today)
            ->get();

        return view('frontend.pastBooking', compact('pastBookings'));
    }

    public function filterCars(Request $request)
    {
        // Retrieve the filter inputs
        $brand = $request->input('brand');
        $type = $request->input('car_type');
        $rent_min = $request->input('rent_min');
        $rent_max = $request->input('rent_max');

        // Build the query
        $query = Car::query();


        // Add conditions only if values are present
        if (!empty($brand) && $brand !== 'Brand') {
            $query->where('brand', $brand);
        }

        if (!empty($type) && $type !== 'Type') {
            $query->where('car_type', $type);
        }

        if (!empty($rent_min)) {
            $query->where('daily_rent_price', '>=', $rent_min);
        }

        if (!empty($rent_max)) {
            $query->where('daily_rent_price', '<=', $rent_max);
        }

        if ($request->order_by) {
            if ($request->order_by === 'price_asc') {
                $query->orderBy('daily_rent_price', 'asc');
            } elseif ($request->order_by === 'price_desc') {
                $query->orderBy('daily_rent_price', 'desc');
            }
        }

        // Get the filtered results
        $cars = $query->get();

        return view('frontend.rental', compact('cars'));
    }

    public function searchCars(Request $request)
    {
        // Retrieve the search input
        $search = $request->input('search');

        // Build the query
        $query = Car::query();

        if (!empty($search)) {
            $query->where('car_type', 'LIKE', "%{$search}%")
                ->orWhere('model', 'LIKE', "%{$search}%")
                ->orWhere('brand', 'LIKE', "%{$search}%")
                ->orWhere('name', 'LIKE', "%{$search}%");
        }

        // Get the filtered results
        $cars = $query->get();

        return view('frontend.rental', compact('cars'));
    }
    function setting()

    {
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('frontend.setting', compact('user'));
    }
    function updateSetting(Request $request)

    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->update();
        return back();
    }
}
