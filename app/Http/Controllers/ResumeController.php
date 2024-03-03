<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function getHome(){
        return view('home');
    }

    public function getUserDashboard(){
        return view('userDashboard');
    }  
}
