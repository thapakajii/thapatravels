<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\ContactController;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');

    }
}
