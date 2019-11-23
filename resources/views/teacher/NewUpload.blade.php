
@extends('teacher.teacher')

@section('contant_teacher')
    
    <div class="container border rounded pt-2 ml-3">
            <form method="post"  action="/saveFileDetails" enctype="multipart/form-data" >
                    @csrf
                    <h2 class="border-bottom">New Assignment Details upload</h2>
                    @if (session('status'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        {{session('status')}}
                    </div>
                    @endif
                    <div class="form-group clearfix">
                            <label class="col-sm-3 control-label ">
                                  Assignment No.
                            </label>
                            <div class="col-sm-9">
                              <input required type="text" class=" form-control bg-light " placeholder="" maxlength="3"    name='a_no' >
                            </div>
                          </div>
                          <br>
                        <div class="form-group clearfix">
                            <label class="col-sm-3 control-label ">
                                    Assignment Details
                            </label>
                            <div class="col-sm-9">
                              <input required type="text" class=" form-control bg-light " placeholder="" maxlength="150"    name='Assignment_Details' >
                            </div>
                        </div>
                          <br>
                        <div class="form-group clearfix">
                            <label class="col-sm-3 control-label ">
                                    Semester
                            </label>
                            <div class="col-sm-9">
                              <input required type="text" class=" form-control bg-light " placeholder="write Semester i.e 06" maxlength="2"    name='Semester' >
                            </div>
                        </div>
                          <br>
                        <div class="form-group clearfix">
                            <label class="col-sm-3 control-label ">
                                    Deadline
                            </label>
                            <div class="col-sm-9">
                              <input required type="text" class=" form-control bg-light " placeholder="write deadline date i.e 06-oct" maxlength="15"    name='Deadline' >
                            </div>
                        </div>
                          <br>
                    <div class="col-sm-3 ml-1 control-label ">
                      <label for="">Upload Assignment file</label>
                      <div class="col-sm-9 ml-2">
                        <input required type="file" name="file_image" />
                    </div>
                    <label class="">Select a file to upload</label> <br>                               
                    </div>
                    <br>
                    
                    <div class="col-sm-12 padd">
                      <input type="submit" value="Save Now" class="btn btn-warning btn-lg mb-4" name="" >
                      </div>
            </form>
        </div>
        
@endsection