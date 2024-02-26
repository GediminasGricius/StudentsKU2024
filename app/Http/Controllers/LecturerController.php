<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    public function create(){
        return view('lecturer.create');
    }

    public function store(Request $request){
        $lecturer=new Lecturer();
        $lecturer->name=$request->name;
        $lecturer->surname=$request->surname;
        $lecturer->save();
        return redirect()->route('lecturers');
    }

    public function index(){
        return view('lecturer.index',[
            'lecturers'=>Lecturer::all()
        ]);
    }
}
