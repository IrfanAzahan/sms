<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\CourseController;

Route::middleware(['auth'])->group(function () {
    // IT Staff Course Management Routes
    Route::get('/admin/courses', [CourseController::class, 'index'])->name('admin.courses.index');
    Route::post('/admin/courses', [CourseController::class, 'store'])->name('admin.courses.store');
    Route::put('/admin/courses/{course}', [CourseController::class, 'update'])->name('admin.courses.update');
    Route::delete('/admin/courses/{course}', [CourseController::class, 'destroy'])->name('admin.courses.destroy');
});

Route::get('/', function () {
    return view('welcome');
});
