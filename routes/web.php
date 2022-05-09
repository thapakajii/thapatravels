<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\TravelDestinationController;
use App\Http\Controllers\Admin\TravelPackageController;
use App\Http\Controllers\Admin\VehicleController;
use App\Http\Controllers\Frontend\TravelDestinationController as FrontendTravelDestinationController;
use App\Http\Controllers\Frontend\TravelPackageController as FrontendTravelPackageController;
use App\Http\Controllers\Frontend\VehicleController as FrontendVehicleController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/traveldestinations', [FrontendTravelDestinationController::class, 'index'])->name('traveldestinations.index');
Route::get('/traveldestinations/{traveldestination}', [FrontendTravelDestinationController::class, 'show'])->name('traveldestinations.show');
Route::get('/travelpackages', [FrontendTravelPackageController::class, 'index'])->name('travelpackages.index');
Route::get('/travelpackages/{travelpackage}', [FrontendTravelPackageController::class, 'show'])->name('travelpackages.show');
Route::get('/vehicles', [FrontendVehicleController::class, 'index'])->name('vehicles.index');
Route::get('/vehicles/{vehicle}', [FrontendVehicleController::class, 'show'])->name('vehicles.show');

Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function(){
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('/traveldestinations', TravelDestinationController::class);
    Route::resource('/travelpackages', TravelPackageController::class);
    Route::resource('/vehicles', VehicleController::class);
    Route::resource('/reservations', ReservationController::class);
});

require __DIR__.'/auth.php';
