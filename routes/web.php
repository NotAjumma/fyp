<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\BcdrCourseController;
use App\Http\Controllers\RiskCourseController;
use App\Http\Controllers\AuditCourseController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\BcdrChapterController;
use App\Http\Controllers\RiskChapterController;
use App\Http\Controllers\AuditChapterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\UploadFileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ProfileFrontPageController;
use App\Http\Controllers\UserFeedbackController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\BrowserHistoryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('landingpage');
});*/
Route::get('/', [LandingPageController::class, 'index'])->name('landingpage');
Route::get('/home', [LandingPageController::class, 'index'])->name('home');

Auth::routes();

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/coursepage', [CourseController::class, 'index'])->name('course.coursepage');
Route::get('/bcdrcourse', [BcdrCourseController::class, 'index'])->name('course.bcdrcoursepage');
Route::get('/riskcourse', [RiskCourseController::class, 'index'])->name('course.riskcoursepage');
Route::get('/auditcourse', [AuditCourseController::class, 'index'])->name('course.auditcoursepage');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/admindash', [AdminController::class, 'index'])->name('admindashboard');

Route::get('/chapterpage', [ChapterController::class, 'index'])->name('chapter.chapterpage');
Route::get('/bcdrchapter', [BcdrChapterController::class, 'index'])->name('chapter.bcdrchapterpage');
Route::get('/riskchapter', [RiskChapterController::class, 'index'])->name('chapter.riskchapterpage');
Route::get('/auditchapter', [AuditChapterController::class, 'index'])->name('chapter.auditchapterpage');

Route::get('/article', [ArticleController::class, 'index'])->name('articlepage');
Route::get('/profile', [ProfileFrontPageController::class, 'index'])->name('profile.profilefrontpage');
Route::get('/feedback', [UserFeedbackController::class, 'index'])->name('feedback.userfeedback');

Route::get('/get-file', [ChapterController::class, 'getFile'])->name('get-file');

Route::get('/view-pdf/{filename}', function ($filename) {
    $filePath = storage_path('app/private/uploads/' . $filename);
    if (!Storage::disk('private')->exists('uploads/' . $filename)) {
        abort(404);
    }
    return response()->file($filePath);
})->name('view-pdf');


Route::get('/uploadfile', [UploadFileController::class, 'upload'])->name('uploadfile');
Route::post('/uploadfile', [UploadFileController::class, 'uploadPost'])->name('uploadfile.post');

//Authencation
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/submit-register', [AuthController::class, 'submitRegister'])->name('submit-register');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/submit-login', [AuthController::class, 'submitLogin'])->name('submit-login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/browser-history/store', [BrowserHistoryController::class, 'store']);

//admin
Route::get('/manage-quiz', [AdminController::class, 'manageQuiz'])->name('manage-quiz');

// Route::view('/login', 'login');



//require __DIR__.'/auth.php';
