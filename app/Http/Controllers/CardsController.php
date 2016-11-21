<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CardsController extends Controller
{
    //
    function index() {

    	return view('pages.cards');
    }

    
}
