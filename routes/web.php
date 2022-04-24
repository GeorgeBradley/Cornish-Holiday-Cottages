<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PropertyController;

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

Route::get('/', [PagesController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login',[LoginController::class, 'store']);
Route::get('/properties', [PropertyController::class, 'show'])->name('properties');
Route::get('/property/{property}', [PropertyController::class, 'property'])->name('property');

Route::get('/properties/newproperty', [PropertyController::class, 'newProperty'])->name('add-new-property-form');
Route::post('/addproperty', [PropertyController::class, 'store'])->name('addNewProperty');


Route::post('/logout', [LogoutController::class, 'perform'])->name('logout');