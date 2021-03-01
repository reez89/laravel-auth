<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // show home page
    public function index()
    {
        return view('guests.index');
    }

    // show about
    public function about()
    {
        return view('guests.about');
    }
    // contacts
    public function contacts()
    {
        return view('guests.contacts');
    }
}
