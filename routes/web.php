<?php

use App\Http\Controllers\AdminController\AlumnusController;
use App\Http\Controllers\AdminController\DashboardController;
use App\Http\Controllers\AdminController\InsightController;
use App\Http\Controllers\AdminController\StudentController;
use App\Http\Controllers\StudentController\CareerHistoryController;
use App\Http\Controllers\StudentController\CertificationController;
use App\Http\Controllers\StudentController\PersonalSummaryController;
use App\http\Controllers\StudentController\StudentDashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController\StudentProfileController;
use App\Http\Controllers\StudentController\StudentProfileUpdateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\PasswordController;
Route::get('/', function () {
    return view('welcome');
});


Route::prefix('admin')->middleware(['auth', 'role:Admin'])->group(function () {

    Route::get('/dashboard',[DashboardController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/insight', [InsightController::class, 'analytics'])->name('admin.insight');
    Route::get('/student', [StudentController::class, 'student'])->name('admin.student');
    Route::get('/alumnus', [AlumnusController::class, 'alumnus'])->name('admin.alumnus');
    Route::get('/settings', [PasswordController::class, 'index'])->name('admin.settings');

    //POST//
    Route::post('/student/add', [StudentController::class,'store'])->name('admin.student.add');

});

Route::prefix('student')->middleware(['auth', 'role:User'])->group(function () {

    Route::get('/dashboard', [StudentDashboardController::class, 'dashboard'])->name('student.dashboard');

    Route::post('/personal-summary/add', [PersonalSummaryController::class, 'store'])->name('student.add.personalSummary');
    Route::put('/personal-summary/update/{id}', [PersonalSummaryController::class, 'update'])->name('student.update.personalSummary');

    Route::post('/career-history/add',[CareerHistoryController::class, 'store'])->name('student.add.careerHistory');
    
    Route::post('/certification/add', [CertificationController::class, 'store'])->name('student.add.certification');


});

Route::get('/user', function () {
    return view('/pages/user/dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
