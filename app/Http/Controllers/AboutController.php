<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\AboutController;

class AboutController extends Controller
{
    public function index()
    {
        return view('about.index');

    }
}
