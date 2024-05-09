<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiskCourseController extends Controller
{
    public function index(){
        return view('course.riskcoursepage');
    }
}
