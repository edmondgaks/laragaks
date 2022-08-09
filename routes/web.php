<?php

use App\Http\Controllers\ListingController;
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
 
//Show Create form
Route::get('/listings/create', [ListingController::class, 'create']);
// Store listing data
Route::post('/listings', [ListingController::class, 'store']);

// Show edit form 

Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']); 

Route::get('/listings/{listing}', [ListingController::class, 'show']);