<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class CountriesController extends Controller
{

    public function countries(){
        return view('home',compact('countries'));
    }
}
