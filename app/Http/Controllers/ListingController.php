<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;


class ListingController extends Controller
{
    // Show all listings
    public function index() {
        return view('listings.index', [
            'listings' => Listing::all()
        ]);
    }
    // Show single listing
    public function show(Listing $listing) {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }
}
