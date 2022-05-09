<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\travelDestination;
use App\Http\Controllers\Frontend\TravelDestinationController;

class TravelDestinationController extends Controller
{
    public function index()
    {
        $traveldestinations = travelDestination::all();
        return view('traveldestinations.index', compact('traveldestinations'));
    }
}
