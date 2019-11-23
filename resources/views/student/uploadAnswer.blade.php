@extends('student.student')
 
@section('contant_student')
<div class="container">
        <h1 class="display-4 border bg-secondary text-light pl-2">Upload Assignment Answer</h1>
        @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{session('status')}}
                      </div>
                      
                  @endif
        <div class="container border rounded pt-2">
          <form method="post"  action="/SubmitAnswer" enctype="multipart/form-data" >
                  @csrf
                  <div class="form-group clearfix">
                    <label class="col-sm-3 control-label ">
                            Assignment No
                    </label>
                    <div class="col-sm-9">
                      <input  type="text" disabled  value = "{{ $upload_assignment_detail->Assignment_no }}" class="form-control" >
                      <input  type="hidden" name="assignment_no" value = "{{ $upload_assignment_detail->Assignment_no }}" class="form-control" >
                    </div>
                  </div>
                  
                  <div class="form-group clearfix">
                    <label class="col-sm-3 control-label ">
                            Assignment Details
                    </label>
                    <div class="col-sm-9">
                      <input type="text" disabled  value = "{{ $upload_assignment_detail->Assignment_Details }}" class="form-control" >
                      <input type="hidden" disabled name='upload_assignment_detail' value = "{{ $upload_assignment_detail->Assignment_Details }}" class="form-control" >
                    </div>
                  </div>
                  
                  <div class="form-group clearfix">
                    <label class="col-sm-3 control-label ">
                            Semester
                    </label>
                    <div class="col-sm-9">
                      <input type="text" disabled name='student_semester' value = "{{ $upload_assignment_detail->Semester }}" class="form-control" >
                      <input type="hidden"  name='student_semester' value = "{{ $upload_assignment_detail->Semester }}" class="form-control" >
                    </div>
                  </div>
                  <div class="form-group clearfix">
                    <label class="col-sm-3 control-label ">
                            Submit by
                    </label>
                    <div class="col-sm-9">
                      <input required type="text" name='student_name' placeholder="Student name" class="form-control" >
                    </div>
                  </div>
                  <div class="form-group clearfix">
                    <label class="col-sm-3 control-label ">
                            Roll no.
                    </label>
                    <div class="col-sm-9">
                      <input required type="text" name='student_rollno' placeholder="Student rollno i.e 16cseXX" class="form-control" >
                    </div>
                  </div>
                  
                  
                  <div class="col-sm-3 control-label ">
                    <label for="">Upload Answer file</label>
                    <div class="col-sm-9 border">
                      <input required type="file" name="file" />
                      <label class="">Select a file to upload</label> <br>   
                    </div>
                  </div>
                  <div class="col-sm-12 my-2">
                      <input type="submit" value="Save Now" class="btn btn-warning btn-lg" name=""  >
                    </div>
          </form>
      </div>
    </div>
      <br>
      <br>
@endsection