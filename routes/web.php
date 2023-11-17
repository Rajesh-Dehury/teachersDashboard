<?php

use App\Http\Controllers\TeacherAuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admission_corner', function () {
    return view('admission_corner');
});
Route::get('/class_page', function () {
    return view('class_page');
});
Route::get('/cohort_dashboard', function () {
    return view('cohort_dashboard');
});

Route::get('/interest_page', function () {
    return view('interest_page');
});
Route::get('/lifepaths_page', function () {
    return view('lifepaths_page');
});
Route::get('/lifeskills_page', function () {
    return view('lifeskills_page');
});
Route::get('/report_page', function () {
    return view('report_page');
});
Route::get('/student_page', function () {
    return view('student_page');
});
Route::get('/student_profile', function () {
    return view('student_profile');
});

Route::get('/summary_student_report_one', function () {
    return view('summary_student_report_one');
});

Route::get('/teacher_dashboard', function () {
    return view('teacher_dashboard');
});



Route::group(['middleware' => ['guest:teacher_user']], function () {
    Route::get('teacher/login', [TeacherAuthController::class, 'loginView'])->name('teacher.login');
    Route::post('teacher/login', [TeacherAuthController::class, 'login'])->name('teacher.login');
    Route::get('teacher/forgot/password', [TeacherAuthController::class, 'forgotPasswordView'])->name('teacher.forgot.password');
    Route::post('teacher/forgot/password', [TeacherAuthController::class, 'forgotPassword'])->name('teacher.forgot.password');
    Route::get('teacher/forgot/{link}/{id}', [TeacherAuthController::class, 'forgotPasswordViewLink'])->name('teacher.forgot.link');
    Route::post('teacher/forgot/reset', [TeacherAuthController::class, 'resetPassword'])->name('teacher.forgot.reset');
});
Route::group(['middleware' => ['auth:teacher_user']], function () {
    Route::get('teacher/dashboard', [TeacherAuthController::class, 'dashboard'])->name('teacher.dashboard');
    Route::get('teacher/logout', [TeacherAuthController::class, 'logout'])->name('teacher.logout');
});
