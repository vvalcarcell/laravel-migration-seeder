<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;

class HomeController extends Controller
{
    public function index(){
        $allTrips= Trip::all();
        $fromRome= Trip::where('departure_city', 'Rome')->get();
        // dump($fromRome);
        return view('home', compact('allTrips', 'fromRome'));
    }
}
