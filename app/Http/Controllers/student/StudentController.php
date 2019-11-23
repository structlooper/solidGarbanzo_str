<?php

namespace App\Http\Controllers\student;

use Illuminate\Http\Request;
use App\upload_assignment_detail;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function view()
    {
        return view('student.student');
    }
    public function assigmentsList()
    {
        $upload_assignment_details = upload_assignment_detail::all();
        return view('student.assigmentsList')->with('upload_assignment_details',$upload_assignment_details);
    }
}
