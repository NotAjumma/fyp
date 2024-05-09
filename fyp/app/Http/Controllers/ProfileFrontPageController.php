<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileFrontPageController extends Controller
{
    public function index(){
        return view('profile.profilefrontpage');
    }
}
