<?php

use App\Http\Controllers\AdminController\AlumnusController;
use App\Http\Controllers\AdminController\DashboardController;
use App\Http\Controllers\AdminController\InsightController;
use App\Http\Controllers\AdminController\StudentController;
use App\http\Controllers\StudentController\StudentDashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('welcome');
});


Route::prefix('admin')->middleware(['auth', 'role:Admin'])->group(function () {

    Route::get('/dashboard',[DashboardController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/insight', [InsightController::class, 'analytics'])->name('admin.insight');
    Route::get('/student', [StudentController::class, 'student'])->name('admin.student');
    Route::get('/alumnus', [AlumnusController::class, 'alumnus'])->name('admin.alumnus');
});

Route::prefix('student')->middleware(['auth', 'role:User'])->group(function () {

    Route::get('/dashboard', [StudentDashboardController::class, 'dashboard']);
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
