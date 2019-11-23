<?php

namespace App\Http\Controllers\teacher;

use Illuminate\Http\Request;
use App\upload_assignment_detail;
use App\Http\Controllers\Controller;
use Symfony\Component\Console\Input\Input;

class TeacherController extends Controller
{
    public function view()
    {
        return view('teacher.teacher');
    }
    function ShowDetails(request $request)
    {
        $upload_assignment_details = upload_assignment_detail::all();
        return view('teacher.ShowDetails')->with('upload_assignment_details',$upload_assignment_details);
    }

    public function NewUpload()
    {
        return view('teacher.NewUpload');
    }

    function saveFileDetails(request $request)
    {
        $upload_assignment_details = new upload_assignment_detail();

        $upload_assignment_details->Assignment_no = $request->Input('a_no');
        $upload_assignment_details->Assignment_Details = $request->Input('Assignment_Details');
        $upload_assignment_details->Semester = $request->Input('Semester');
        $upload_assignment_details->Deadline = $request->Input('Deadline');
        // $file = $request->get('file');
        if ($request->hasfile('file_image')) {
            $file = $request->file('file_image');
            $extension = $file->getClientOriginalExtension(); //geting extension from image Extension
            $filename =  uniqid() . '.' . $extension;
            $file->move('uploades/techer/assinment/', $filename);
            
            $upload_assignment_details->file = $filename;
            
        }
        
        else{
            
            return $request;
        }
        
        $upload_assignment_details->save();
        return redirect()->back()->with('status', 'File uploaded successfully.');
       
    }

    public function SubmitedDetails()
    {
        return view('teacher.SubmitedDetails');
    }
}
