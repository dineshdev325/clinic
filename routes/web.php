<?php

use App\Http\Controllers\Controller;
use App\Http\Livewire\Payment\Payment;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('home');
});


Route::get('/appointment', function () {
    return view('appointment');
})->name("appointment");
Route::get('/patient', function () {
    return view('patients');
});

Route::get('/detail-page', function ($patient) {
    return view('detail-page',compact('patient'));
});

Route::get('/confirm', function () {
    return view('confirm');
});

Route::get('/payments',[Payment::class,'make_payment']);

Route::get('/success',[Payment::class,'success']);

// Route::post('/payment', [Payment::class, 'make_payment'])->name('make.payment');
Route::get('/secret', [Controller::class, 'client_secret']);


