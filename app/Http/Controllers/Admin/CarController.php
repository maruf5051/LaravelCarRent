<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Imagick\Driver;

class CarController extends Controller
{
    //
    function addCar()
    {
        return view('admin.Car.AddCar');
    }
    function allCar()
    {
        $cars = Car::all();
        return view('admin.Car.AllCar', compact('cars'));
    }
    function storeCar(Request $request)
    {
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/CarImage'), $filename);
            $data = 'upload/CarImage/' . $filename; // Ensure the path is correct
        }


        Car::insert([
            'name' => $request->name,
            'availability' => $request->availability,
            'brand' => $request->brand,
            'year' => $request->year,
            'image' => $data,
            'model' => $request->model,
            'daily_rent_price' => $request->daily_rent_price,
            'car_type' => $request->car_type,

        ]);


        $notify = array(
            'message' => 'New Car Added Successfully',
            'alert-type' => 'success',
        );
        return back()->with($notify);
    }

    function deleteCar($id)
    {
        $car = Car::findOrFail($id);

        // Optional: Delete the car image from storage if it exists
        if ($car->image && file_exists(public_path($car->image))) {
            unlink(public_path($car->image));
        }

        // Delete the car record from the database
        $car->delete();
        return back();
    }
    function editCar($id)
    {
        $car = Car::find($id);
        return view('admin.Car.editCar', compact('car'));
    }
    function updateCar($id, Request $request)
    {
        $car = Car::findOrFail($id);


        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/CarImage'), $filename);
            $data = 'upload/CarImage/' . $filename;


            $car->image = $data;
        }

        // Update other fields
        $car->name = $request->name;
        $car->availability = $request->availability;
        $car->brand = $request->brand;
        $car->year = $request->year;
        $car->model = $request->model;
        $car->daily_rent_price = $request->daily_rent_price;
        $car->car_type = $request->car_type;


        $car->save();

        return back();
    }
}
