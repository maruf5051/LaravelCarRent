<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\RentalController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Frontend\PageController;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Route::middleware(['auth','role:admin'])->group(function () {

// });



//Admin


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'admin_logout'])->name('admin.logout');
});
Route::get('/admin/login', [AdminController::class, 'admin_login'])->name('admin.login');

require __DIR__ . '/auth.php';


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/addCar', [CarController::class, 'addCar'])->name('add.car');
    Route::get('/admin/allCar', [CarController::class, 'allCar'])->name('all.car');
    Route::post('/admin/store/car', [CarController::class, 'storeCar'])->name('store.car');
    Route::get('/admin/delete/car/{id}', [CarController::class, 'deleteCar'])->name('delete.car');
    Route::get('/admin/edit/car/{id}', [CarController::class, 'editCar'])->name('edit.car');
    Route::post('/admin/update/car/{id}', [CarController::class, 'updateCar'])->name('update.car');
});

Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/admin/allRental', [RentalController::class, 'allRental'])->name('all.Rental');
});
Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/admin/allCustomer', [CustomerController::class, 'allCustomer'])->name('all.Customer');
    Route::get('/admin/allHistory/{id}', [CustomerController::class, 'history'])->name('history');
});

// End Admin


// Frontend Pages

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/SeeDetails/{id}', [PageController::class, 'SeeDetails'])->name('seeDetails');
Route::post('/car/book', [PageController::class, 'bookCar'])->name('car.book');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/rental', [PageController::class, 'rental'])->name('rental');
Route::get('/cars/filter', [PageController::class, 'filterCars'])->name('cars.filter');
Route::get('/cars/search', [PageController::class, 'searchCars'])->name('cars.search');
Route::get('/signIn', [PageController::class, 'signIn'])->name('signIn');
Route::get('/signUp', [PageController::class, 'signUp'])->name('signUp');
Route::get('/setting', [PageController::class, 'setting'])->name('setting');
Route::post('/update/setting', [PageController::class, 'updateSetting'])->name('update.setting');


//Frontend Profile
Route::middleware('auth')->group(function () {

    Route::get('/user/logout', [PageController::class, 'user_logout'])->name('user.logout');
    Route::get('/user/currenBooking', [PageController::class, 'currentBookings'])->name('current.booking');
    Route::get('/delete/{id}', [PageController::class, 'deleteBooking'])->name('booking.delete');
    Route::get('/user/pastBooking', [PageController::class, 'pastBookings'])->name('past.booking');
});
