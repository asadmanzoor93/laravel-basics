<?php

namespace App\Http\Controllers;

use App\Profile;
use App\Student;
use Illuminate\Http\Request;

use App\Http\Requests;

class StudentController extends Controller
{
    // Basic Index Page For Showing Student Records

    public function index()
    {
//        $profile = new Profile;
//        $profile->telephone = '614-867-5309';
//
//        $student = Student::find(1);
//
////        $student->profile()->delete();
//        $student->profile()->save($profile);

        $students = Student::all();
        return view('Student.index',['students'=>$students]);
    }
}
