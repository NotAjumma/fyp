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
use App\Http\Controllers\PdfFileController;
use App\Http\Controllers\Admin\QuizController;
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

// Auth::routes();

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

Route::get('/chapterpage', [CourseController::class, 'chapter'])->name('chapter.chapterpage');
Route::get('/bcdrchapter', [BcdrCourseController::class, 'chapter'])->name('chapter.bcdrchapterpage');
Route::get('/riskchapter', [RiskCourseController::class, 'chapter'])->name('chapter.riskchapterpage');
Route::get('/auditchapter', [AuditCourseController::class, 'chapter'])->name('chapter.auditchapterpage');

Route::get('/article', [ArticleController::class, 'index'])->name('articlepage');
Route::get('/profile', [ProfileFrontPageController::class, 'index'])->name('profile.profilefrontpage');

//Feedback
Route::get('/feedback', [UserFeedbackController::class, 'index'])->name('feedback.userfeedback');
Route::post('/feedback', [UserFeedbackController::class, 'store'])->name('feedback.store');
Route::get('/admin/feedback', [UserFeedbackController::class, 'index'])->name('admin.feedback.index')->middleware('auth:admin');

Route::get('/get-file', [ChapterController::class, 'getFile'])->name('get-file');

Route::get('/view-pdf/{filename}', function ($filename) {
    $filePath = storage_path('app/public/upload_pdfs/' . $filename);
    if (!Storage::disk('public')->exists('upload_pdfs/' . $filename)) {
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

Route::group(['middleware' => 'isAdmin'], function () {
    Route::get('quizzes', [QuizController::class, 'index'])->name('quizzes.index');
    Route::get('quizzes/create', [QuizController::class, 'createQuiz'])->name('quizzes.create');
    Route::post('quizzes', [QuizController::class, 'storeQuiz'])->name('quizzes.store');
    Route::get('quizzes/{quiz}/questions/create', [QuizController::class, 'createQuestion'])->name('questions.create');
    Route::post('questions', [QuizController::class, 'storeQuestion'])->name('questions.store');
    Route::put('/quizzes/{quiz}/status', [QuizController::class, 'updateStatus'])->name('quizzes.updateStatus');
    Route::delete('/quizzes/delete{id}', [QuizController::class, 'destroy'])->name('quizzes.delete');
    Route::get('/quizzes/{quiz}/edit', [QuizController::class, 'edit'])->name('quizzes.edit');
    Route::put('/quizzes/{quiz}', [QuizController::class, 'submitEdit'])->name('quizzes.update');

    // Handle upload files
    Route::get('upload-files', [PdfFileController::class, 'index'])->name('uploadFiles.index');
    Route::resource('pdf_files', PdfFileController::class);
    Route::delete('/pdf_files/delete{id}', [PdfFileController::class, 'destroy'])->name('pdf_files.delete');

    //feedbacks
    Route::get('admin/feedbacks', [UserFeedbackController::class, 'view'])->name('feedbacks.view');
    Route::delete('/feedback/delete{id}', [UserFeedbackController::class, 'destroy'])->name('feedbacks.delete');


});

Route::get('{courseName}/quizzes/{id}', [QuizController::class, 'view'])->name('quizzes.view');
Route::post('{courseName}/quizzes/{id}/submit', [QuizController::class, 'submitQuiz'])->name('submit-quiz');



// Route::view('/login', 'login');



//require __DIR__.'/auth.php';
