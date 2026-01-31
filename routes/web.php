<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RegistrationController;

Route::get('/', function () {
    return view('welcome');
});

// Group all Admin routes under authentication AND the admin role check
Route::middleware(['auth', 'can:access-admin'])->group(function () {
    
    // Dashboard
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    
    // Registration Management
    Route::get('/admin/registrations', [RegistrationController::class, 'index'])->name('admin.registrations.index');
    Route::delete('/admin/registrations/{registration}', [RegistrationController::class, 'destroy'])->name('admin.registrations.destroy');

    // Course Management (These were missing!)
    Route::get('/admin/courses', [CourseController::class, 'index'])->name('admin.courses.index');
    Route::post('/admin/courses', [CourseController::class, 'store'])->name('admin.courses.store');
    Route::put('/admin/courses/{course}', [CourseController::class, 'update'])->name('admin.courses.update');
    Route::delete('/admin/courses/{course}', [CourseController::class, 'destroy'])->name('admin.courses.destroy');
});

require __DIR__.'/auth.php'; // Ensure authentication routes are included