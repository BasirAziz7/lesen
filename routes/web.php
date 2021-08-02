<?php
use App\Http\Controllers\ReportingController;
use App\Http\Controllers\AircraftMaintenancePersonnelController;
use App\Http\Controllers\AirNavigationServicesPersonnelController;
use App\Http\Controllers\AuditTrailController;
use App\Http\Controllers\FlightCrewLicensingController;
use App\Http\Controllers\MedicalExaminationController;
use App\Http\Controllers\FailController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('fails',FailController::class);

Route::resource('reportings',ReportingController::class);

Route::resource('aircraftmaintenancepersonnels',AircraftMaintenancePersonnelController::class);

Route::resource('airnavigationservicespersonnels',AirNavigationServicesPersonnelController::class);

Route::resource('audittrails',AuditTrailController::class);

Route::resource('flightcrewlicensings',FlightCrewLicensingController::class);

Route::resource('medicalexaminations',MedicalExaminationController::class);



