<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    //

    public function course($id, $page = 1)
    {
        $course = Course::with('pages')->findOrFail($id);
        $hasAccess = Auth::user() && Auth::user()->courses->contains($course);
        if (!$hasAccess) {
            return redirect()->route('courses');
        }

//        pick page index 0 when page is 1

        $currentPage = $course->pages->toArray()[$page - 1] ?? null;

        return view('show', compact([
            'currentPage', 'course'
        ]));
    }

}
