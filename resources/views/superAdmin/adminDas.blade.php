@extends('layouts.app')
@section('content')
<div class="container border">
    <h1 class="text-center">Welcome to admin dashboard</h1>
</div>
    <div class="container my-4">
        <h3 class="ml-4 border-bottom border-danger">User Profiles</h3>
        <div class="row ml-2">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title text-center">Registered Entries</h5>
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
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Contact</th>
                                            <th>Gender</th>
                                            <th>profile</th>
                                            <th>Address</th>
                                            <th>Status</th>
                                            <th>Submit</th>
                                        </thead>
                                    </tbody>
                                    @foreach ($datas as $data)
                                        
                                    <tr>
                                        <td>{{ $data->id }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>{{ $data->contact }}</td>
                                        <td>{{ $data->gender }}</td>
                                        <td>{{ $data->profile }}</td>
                                        <td>{{ $data->address }}</td>
                                        <td>{{ $data->status }}</td>
                                        <td>
                                            <form action="../profileApprove/{{ $data->id }}" method="post">
                                                @csrf
                                                @method('PUT')
                                               <input type="hidden" name='status' value='approved' class="form-control">
                                                <input type="submit" class="btn btn-success ml-2" value='Approve'>
                                            </form>
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