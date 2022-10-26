<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;
use App\Models\Listing;

class ListingController extends Controller
{
    // get single object
    public function show(Listing $listing) 
    {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    
    // show all
    public function index()
    {
        return view('listings.index', [
            'heading' => 'topics from the presnet',
            'listings' => Listing::all()
        ]);
    }


}
