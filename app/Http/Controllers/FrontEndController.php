<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    function Home(){
        return view('frontend.home');
    }

    function RequestForBlood(){
        return view('frontend.requestforblood');
    }

    function RequestedBlood(){
        return view('frontend.requestedblood');
    }

    function BloodDonor(){
        return view('frontend.blooddonor');
    }

    function Blog(){
        return view('frontend.blog');
    }
}
