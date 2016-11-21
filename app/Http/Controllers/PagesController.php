<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home() {
        $names = ['Frutos Secos','Cejas','Nurse', 'Jarita'];
        return view('pages/names', compact('names')); 
    }
    
    public function about() {
        return view('pages.about');
    }

    public function contact() {
    	return view('pages.contact');
    }

    public function cards() {
        return view('pages.cards');
    }
}
