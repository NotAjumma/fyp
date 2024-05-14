<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiskCourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $routeName = request()->route()->getName();
        $title = 'Risk Management';

        $browserHistoryController = new BrowserHistoryController();
        $browserHistoryController->storeBrowserHistory($routeName, $title);
        return view('course.riskcoursepage');
    }
}
