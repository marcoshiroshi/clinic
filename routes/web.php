<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AppointmentController;

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

Route::get('/patient/new', [PatientController::class, 'returnForm']);
Route::get('/doctor/new', [DoctorController::class, 'returnForm']);
Route::get('/appointment/new', [AppointmentController::class, 'returnForm']);
Route::resource('/patient', PatientController::class);
Route::resource('/doctor', DoctorController::class);
Route::resource('/appointment', AppointmentController::class);


