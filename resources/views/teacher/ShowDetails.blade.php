
@extends('teacher.teacher')

@section('contant_teacher')

    <div class="container ">
            
            <div class="row ">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title text-center">Assignments</h5>
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
                                                <th>Deadline</th>
                                                <th>Assignment File</th>
                                                <th>Edit Details</th>
                                            </thead>
                                        </tbody>
                                        @foreach ($upload_assignment_details as $data)
                                            
                                        <tr>
                                            <td>{{ $data->id}}</td>
                                            <td>{{ $data->Assignment_no }}</td>
                                            <td>{{ $data->Assignment_Details }}</td>
                                            <td>{{ $data->Semester }}</td>
                                            <td>{{ $data->Deadline }}</td>
                                            <td>{{ $data->file }}</td>
                                            <td> <a href="#" class="btn btn-primary">Edit</a>
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