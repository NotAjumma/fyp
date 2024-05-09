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
use App\Http\Controllers\ProfileFrontPageController;
use App\Http\Controllers\UserFeedbackController;
use Illuminate\Support\Facades\Route;

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

Route::get('/uploadfile', [UploadFileController::class, 'upload'])->name('uploadfile');
Route::post('/uploadfile', [UploadFileController::class, 'uploadPost'])->name('uploadfile.post');


//require __DIR__.'/auth.php';
