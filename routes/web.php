<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\CourseController;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RegistrationController;

Route::middleware(['auth'])->group(function () {
    Route::middleware(['can:access-admin'])->group(function () {
        Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::resource('/admin/courses', CourseController::class);
        Route::get('/admin/registrations', [RegistrationController::class, 'index'])->name('admin.registrations.index');
        Route::delete('/admin/registrations/{registration}', [RegistrationController::class, 'destroy'])->name('admin.registrations.destroy');
    });
});

Route::get('/', function () {
    return view('welcome');
});
