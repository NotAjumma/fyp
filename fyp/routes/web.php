<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\BcdrCourseController;
use App\Http\Controllers\RiskCourseController;
use App\Http\Controllers\AuditCourseController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UploadFileController;
use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/coursepage', [CourseController::class, 'index'])->name('coursepage');
Route::get('/bcdrcourse', [BcdrCourseController::class, 'index'])->name('bcdrcoursepage');
Route::get('/riskcourse', [RiskCourseController::class, 'index'])->name('riskcoursepage');
Route::get('/auditcourse', [AuditCourseController::class, 'index'])->name('auditcoursepage');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/admindash', [AdminController::class, 'index'])->name('admindashboard');

//Route::get('/uploadfile', [UploadFileController::class, 'upload'])->name('uploadfile');
//Route::post('/uploadfile', [UploadFileController::class, 'uploadPost'])->name('uploadfile.post');

//require __DIR__.'/auth.php';
