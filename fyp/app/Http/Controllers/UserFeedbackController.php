<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFeedbackController extends Controller
{
    public function index(){
        return view('feedback.userfeedback');
    }
}
