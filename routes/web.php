<?php

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrivacyPolicy;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\WebsiteSettingsController;

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

// Route::get('/', function(){
//     return view('index');
// });

Route::get('/', [PagesController::class, 'index'])->name('landing-page');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login',[LoginController::class, 'store']);
Route::get('/properties', [PropertyController::class, 'show'])->name('properties');


Route::get('/privacy-policy', [PrivacyPolicy::class, 'index'])->name('privacy-policy');
Route::get('/bookings', [BookingsController::class, 'index'])->name('bookings');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/property/{property}', [PropertyController::class, 'property'])->name('property');

Route::get('/properties/newproperty', [PropertyController::class, 'newProperty'])->name('add-new-property-form')->middleware('auth');
Route::post('/addproperty', [PropertyController::class, 'store'])->name('addNewProperty');


Route::get('websiteSettings', [WebsiteSettingsController::class, 'index'])->name('websiteSettings');
Route::POST('updateWebsiteSettings', [WebsiteSettingsController::class, 'update'])->name('updateWebsiteSettings');
Route::post('/logout', [LogoutController::class, 'perform'])->name('logout');


Route::post('/contact', [PagesController::class, 'send_mail'])->name('addContact');
Route::get('/email', function(){
    Mail::to('info@darynazar.com')->send(new ContactMail);
    return new ContactMail();
});