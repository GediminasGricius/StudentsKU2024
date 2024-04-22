<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
function index(){


        $students=Student::all();

        return view("students.index",[
            "students"=>$students
        ]);
    }


    function filter(Request $request){
        $students=Student::where('name', $request->filterName)->get();


        return view("students.index",[
            "students"=>$students
        ]);
    }

   function create(){
       return view("students.create");
   }

   function store(Request $request){
       $student=new Student();
       $student->name=$request->name;
       $student->surname=$request->surname;
       $student->phone=$request->phone;
       $student->save();

       return redirect()->route("student.index");
   }

   function update($id){
        $student=Student::find($id);

        return view("students.update",[
            "student"=>$student
        ]);
   }

   function save($id, Request $request){
        $student=Student::find($id);
        $student->name=$request->name;
        $student->surname=$request->surname;
        $student->phone=$request->phone;
        $student->save();
        return redirect()->route("student.index");
   }

   function delete($id){
       Student::destroy($id);
       return redirect()->route("student.index");
   }
}
