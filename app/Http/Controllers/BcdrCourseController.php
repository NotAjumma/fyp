<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BcdrCourseController extends Controller
{
    protected $title = 'Business Continuity & Disaster Recovery';

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $routeName = request()->route()->getName();

        $quizzes = Quiz::where('course_name', $this->title)
            ->where('status', 'enabled')
            ->get();
        $browserHistoryController = new BrowserHistoryController();
        $browserHistoryController->storeBrowserHistory($routeName, $this->title);

        return view('course.bcdrcoursepage', compact('quizzes'));
    }

    public function chapter()
    {
        $quizzes = Quiz::where('course_name', $this->title)
            ->where('status', 'enabled')
            ->get();
        return view('chapter.auditchapterpage', compact('quizzes'));
    }

    public function getFile()
    {
        $filePath = 'app\private\private\uploads\Week 4 - Project Initiation.pdf'; // Replace 'your_file_name.ext' with the actual file name
        $fileContents = Storage::disk('private')->get($filePath);

        return response()->make($fileContents, 200, [
            'Content-Type' => 'application/pdf',
            //'Content-Type' => Storage::mimeType($filePath),
            'Content-Disposition' => 'inline; filename="' . basename($filePath) . '"',
        ]);
    }
}
