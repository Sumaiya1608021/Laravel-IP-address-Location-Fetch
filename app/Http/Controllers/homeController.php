<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
class homeController extends Controller
{
    public function user()
    {
        $ip = '103.145.138.77'; //For static IP address get
        //$ip = request()->ip(); //Dynamic IP address get
        $data = Location::get($ip);                
        return view('welcome',compact('data'));
    }
}