@extends('teacher.teacher')

@section('contant_teacher')
<div class="container ">
            
        <div class="row ">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title text-center">Submited Assignments</h5>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{session('status')}}
                                </div>
                                
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody calss="table">
                                        <thead class="text-primary">
                                            <th>No.</th>
                                            <th>Assignment_No.</th>
                                            <th>Assignment Details</th>
                                            <th>Semester</th>
                                            <th>Submited by</th>
                                            <th>Roll no</th>
                                            <th>Assignment Answer File</th>
                                            <th>Download Answer</th>
                                        </thead>
                                    </tbody>
                                    @foreach ($assignment_answers as $data)
                                        
                                    <tr>
                                        <td>{{ $data->id}}</td>
                                        <td>{{ $data->assignment_no }}</td>
                                        <td>{{ $data->assignment_detail }}</td>
                                        <td>{{ $data->student_semester }}</td>
                                        <td>{{ $data->student_name	 }}</td>
                                        <td>{{ $data->student_rollno	 }}</td>
                                        <td>{{ $data->file }}</td>
                                        <td> <a href="uploades\student\answer\{{$data->file}}" class="btn btn-danger" download="{{$data->file}}">Download</a>
                                        </td>                                        
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    
@endsection