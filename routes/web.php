<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
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

Route::get('/', [ListingController::class, 'index']);
 
// Show Create form

Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');
// Store listing data
Route::post('/listings', [ListingController::class, 'store']);

// Show edit form 

Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']); 

// Edit Submit to Update
Route::put('/listings/{listing}', [ListingController::class, 'update']);

// Delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'delete']);

Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Show Register/Create Form 

Route::get('/register', [UserController::class, 'create']);

Route::post('/users', [UserController::class, 'store']);

// Log User out
Route::post('/logout', [UserController::class, 'logout']);

// Show Login Form

Route::get('/login', [UserController::class, 'login'])->name('login');
// Log in User
Route::post('users/authenticate', [UserController::class, 'authenticate']);