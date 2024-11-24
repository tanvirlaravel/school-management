<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index(){

        $teachers = Teacher::with('classNames')->get();

         dump($teachers);


        return view('index', compact('teachers'));
    }



    function show($id){

        $teacher = Teacher::with(['classNames.students'])
                         ->findOrFail($id);
                        //  dump($teacher);

        return view('show', compact('teacher'));
    }
}
