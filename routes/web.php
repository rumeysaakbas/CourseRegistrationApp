<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Models\Course;
use App\Models\Student;


Route::get('/', function () {
    return redirect()->route('courses.index');
});

Route::resource('courses', CourseController::class);
Route::resource('students', StudentController::class);



