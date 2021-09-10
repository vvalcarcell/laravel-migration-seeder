<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;

class HomeController extends Controller
{
    public function index(){
        $allTrips= Trip::all();
        $fromRome= Trip::where('departure_city', 'Rome');
        // dump($allTrips);
        return view('home', compact('allTrips'));
    }
}
