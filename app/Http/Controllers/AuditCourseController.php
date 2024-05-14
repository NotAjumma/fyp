<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuditCourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $routeName = request()->route()->getName();
        $title = 'Control & Audit of Information System';

        $browserHistoryController = new BrowserHistoryController();
        $browserHistoryController->storeBrowserHistory($routeName, $title);
        return view('course.auditcoursepage');
    }
}
