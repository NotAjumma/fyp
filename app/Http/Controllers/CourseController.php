<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BrowserHistory;
use App\Http\Controllers\BrowserHistoryController;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        // $url = $request->url();
        $routeName = request()->route()->getName();
        $title = 'Management of Information Security';

        $browserHistoryController = new BrowserHistoryController();
        $browserHistoryController->storeBrowserHistory($routeName, $title);

        return view('course.coursepage');
    }
}
