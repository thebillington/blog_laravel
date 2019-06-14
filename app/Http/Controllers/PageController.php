<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Home page
    public function index() {

    	// Return the index view
    	return view('index');

    }
}
