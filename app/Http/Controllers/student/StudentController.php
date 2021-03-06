<?php

namespace App\Http\Controllers\student;

use DB;
use App\User;
use App\assignment_answer;
use Illuminate\Http\Request;
use App\upload_assignment_detail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
    function uploadAnswer(request $request , $id)
    {
        $upload_assignment_detail = upload_assignment_detail::findOrFail($id);
        return view('student.uploadAnswer')->with('upload_assignment_detail',$upload_assignment_detail);
    }

    public function SubmitAnswer(request $request)
    {
        $assignment_answers = new assignment_answer();
        $assignment_answers->assignment_no = $request->input('assignment_no');
        $assignment_answers->assignment_detail = $request->input('assignment_detail');
        $assignment_answers->student_semester = $request->input('student_semester');
        $assignment_answers->student_name = $request->input('student_name');
        $assignment_answers->student_rollno = $request->input('student_rollno');
        if ($request->hasfile('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension(); //geting extension from image Extension
            $filename =  uniqid() . '.' . $extension;
            $file->move('uploades/student/answer/', $filename);
            $assignment_answers->file = $filename;
            
        }
       
        else{
            return $request;
        }
        
        $assignment_answers->save();
        return redirect('/studentPortel/assigmentsList')->with('status', 'Answer Uploaded successfuly');

        // return $request;
       
    }

    public function editStudentProfile()
    {
        $user = Auth::user();
        return view('student.editStudentProfile')->with('user',$user);
    }

    public function updatingStudent(request $request , $id)
    {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->contact = $request->input('contact');
        $user->gender = $request->input('gender');
        $user->address = $request->input('address');
        $user->update();
        return  \redirect('/studentPortel')->with('status', 'profile Updated successfuly');
    }
}
