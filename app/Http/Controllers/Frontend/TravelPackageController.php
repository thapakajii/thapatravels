<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\travelPackage;
use App\Http\Controllers\Frontend\TravelPackageController;


class TravelPackageController extends Controller
{
    public function index()
    {   
        $travelpackages = travelPackage::all();
        return view('travelpackages.index', compact('travelpackages'));
    }
}
