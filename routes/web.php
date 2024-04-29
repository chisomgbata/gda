<?php

use App\Http\Controllers\ProfileController;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $topCourses = Course::orderByRaw('RAND()')->take(3)->get();
    return view('welcome', compact('topCourses'));
})->name('home');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/courses', function () {
    $courses = Course::all();
    return view('courses', [
            'courses' => $courses
        ]
    );
})->name('courses');

Route::get('/courses/{course}', function (Course $course) {
//    get all user courses from the hasMany relationship and if the user has this course set the can view variable to true
    $course->canView = Auth::user() ? Auth::user()->courses->contains($course) : false;
    return view('course', [
        'course' => $course
    ]);
})->name('course');


require __DIR__ . '/auth.php';
