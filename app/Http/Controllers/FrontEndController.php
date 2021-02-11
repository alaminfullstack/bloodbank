<?php

namespace App\Http\Controllers;

use App\Models\BloodGroup;
use App\Models\BloodRequest;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    function Home(){
        $bloodGroups = BloodGroup::all();
        return view('frontend.home',compact('bloodGroups'));
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
