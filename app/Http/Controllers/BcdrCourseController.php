<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BcdrCourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $routeName = request()->route()->getName();
        $title = 'Business Continuity & Disaster Recovery';

        $browserHistoryController = new BrowserHistoryController();
        $browserHistoryController->storeBrowserHistory($routeName, $title);

        return view('course.bcdrcoursepage');
    }
}
