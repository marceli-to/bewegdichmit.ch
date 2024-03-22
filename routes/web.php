<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\ApartmentController;

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

Route::view('/', 'pages.home')->name('page.home');
Route::view('/teilnahmebedingungen', 'pages.conditions')->name('page.conditions');
// Route::view('/impressum-und-datenschutz', 'pages.imprint_privacy')->name('page.imprint-privacy');
// Route::view('/impressum', 'pages.imprint')->name('page.imprint');
// Route::view('/datenschutz', 'pages.privacy')->name('page.privacy');

// Add a get route for /slots that points to the slots method of the RegistrationController
Route::get('/slots', 'App\Http\Controllers\Api\RegistrationController@slots');



