<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){

        // $test ="tsts controller";
        // return view('students.index')->with('test',$test);
        return view('students.index');
    }
}
