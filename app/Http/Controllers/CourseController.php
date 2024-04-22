<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lecturer;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function create(){
        return view('course.create',[
            'lecturers'=>Lecturer::all()
        ]);
    }

    public function store(Request $request){
        $course=new Course();
        $course->name=$request->name;
        $course->lecturer_id=$request->lecturer_id;
        $course->save();

        return redirect()->route('courses');
    }

    public function index(){
        return view('course.index',[
           'courses'=>Course::with('lecturer')->get()
        ]);
    }
}
